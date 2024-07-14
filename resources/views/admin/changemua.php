<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
require_once('Header.php');
$title = 'Chỉnh sửa tin tức';
require_once(__DIR__ . "../../../../core/is_user.php");
?>

<?php
if(isset($_GET['id']) && $getUser['level'] == 'admin')
{
    $row = $NNL->get_row(" SELECT * FROM `muaban` WHERE `id` = '".xss($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Không tìm thấy tin tức bạn đang tìm!", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Không tìm thấy tin tức bạn đang tìm!", BASE_URL(''), 0);
}


if(isset($_POST['editmua']) && $getUser['level'] == 'admin' )
{

  $arr_data = array();
    $json['data'] = $arr_data;
    $full_detail = json_encode($json);

    $NNL->update("muaban", array(
                'name' => $_POST['name'],
                'number' => $_POST['number'],
                'soluong' => $_POST['soluong'],
                'image' => $_POST['image'],
                'content' => $_POST['content'],
                'status' => $_POST['status'],
    ), " `id` = '".xss($_GET['id'])."' ");
    admin_msg_success("Lưu thành công", '', 500);
}


?>



<style>
    .custom-form {
        display: flex;
        flex-wrap: wrap;
    }

    .custom-form .form-group {
        width: 100%; /* Mỗi ô chiếm 1/3 (33.33%) chiều rộng */
        padding: 5px;
    }

    .custom-form .form-control {
        width: 100%;
        padding: 12px;
    }

    @media (max-width: 768px) {
        .custom-form .form-group {
            width: 100%; /* Trên màn hình nhỏ, mỗi ô chiếm toàn bộ chiều rộng */
        }
    }
</style>



<style>
    .custom-form {
        display: flex;
        flex-wrap: wrap;
    }

    .custom-form .form-group {
        width: 100%; /* Mỗi ô chiếm 1/3 (33.33%) chiều rộng */
        padding: 5px;
    }

    .custom-form .form-control {
        width: 100%;
        padding: 12px;
    }

    @media (max-width: 768px) {
        .custom-form .form-group {
            width: 100%; /* Trên màn hình nhỏ, mỗi ô chiếm toàn bộ chiều rộng */
        }
    }
</style>
           <div class="intro-y box mt-5">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">Chỉnh sửa sản phẩm</h2>
    </div>
    <div id="horizontal-form" class="p-5">
        <div class="preview">
<form action="" method="post" enctype="multipart/form-data">
    <div class="custom-form">
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Tên sản phẩm</label>
           <input type="text" class="form-control" name="name" value="<?=$row['name']?>" placeholder="Táo xanh" required>
        </div>
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Số lượng</label>
           <input type="text" class="form-control" name="soluong" value="<?=$row['soluong']?>" placeholder="69" required>
        </div>
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Số điện thoại liên hệ</label>
           <input type="text" class="form-control" name="number" value="<?=$row['number']?>" placeholder="Nhập tiêu đề" required>
        </div>
        <div class="form-group">
    <label for="horizontal-form-1" class="bold-title">Ảnh</label>
    <input type="file" id="uploadInput" class="form-control" accept="image/*">
    <input type="text" class="form-control" name="image" id="image" class="form-control" value="<?=$row['image']?>"  placeholder="Link Ảnh">
    <div id="message"></div>
</div>
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Mô tả sản phẩm</label>
           <input type="text" class="form-control" name="content" value="<?=$row['content']?>" placeholder="Nhập tiêu đề" required>
        </div>
   
                                    </div>
                 <div class="form-group">
        <label for "exampleInputEmail1" class="bold-title">Trạng thái</label>
                    <select class="form-control" name="status" required>
                               <option value="1" <?= $row['status'] == '1' ? 'selected' : '' ?>>Hiển thị
                                            </option>
                                            <option value="0" <?= $row['status'] == '0' ? 'selected' : '' ?>>Ẩn</option>
                                    </select>
                </div>
                <div>
                    <br>
                    <button type="submit" name="editmua" class="btn btn-primary">Đăng Ngay</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>

</script>
<script type="text/javascript">
        const uploadInput = document.getElementById('uploadInput');
            const shortenedUrlInput = document.getElementById('image');
         
            uploadInput.addEventListener('change', function (event) {
                const file = event.target.files[0];
                
                if (file) {
                    const formData = new FormData();
                    formData.append('image', file);
                    
                    const clientId = 'd32a28252795ab8';
                    
                    fetch('https://api.imgur.com/3/image', {
                        method: 'POST',
                        headers: {
                            'Authorization': `Client-ID ${clientId}`,
                        },
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.data.link) {
                            document.getElementById('message').innerHTML = '<br><p class="text-success"> Ảnh đã được xử lí thành công! </p>';
                            shortenedUrlInput.value = data.data.link;
                        }
                    })
                    
                    document.getElementById('message').innerHTML = '<br><b style="color: red;"> Ảnh đang được xử lí, vui lòng chờ trong giây lát </b>';
                }
            });
</script>

<?php 
    require_once(__DIR__."/Footer.php");
?>