<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
require_once('Header.php');
$title = 'Quản lý tin tức';

		
?>
<?php
if (isset($_POST['muaban'])  ) {
            $isInsert = $NNL->insert("muaban", [
                'name' => $_POST['name'],
                'number' => $_POST['number'],
                'soluong' => $_POST['soluong'],
                'image' => $_POST['image'],
                'content' => $_POST['content'],
                'status' => $_POST['1'],
                'create_date' => gettime()
            ]);
            
            if ($isInsert) {
                admin_msg_success('Lưu thành công', '', 500);
            } else {


                print("eror");
            }
        

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
           <div class="intro-y box mt-5">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">Tin Tức</h2>
    </div>
    <div id="horizontal-form" class="p-5">
        <div class="preview">
<form action="" method="post" enctype="multipart/form-data">
    <div class="custom-form">
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Tên sản phẩm</label>
           <input type="text" class="form-control" name="name" placeholder="Táo xanh" required>
        </div>
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Số lượng</label>
           <input type="text" class="form-control" name="soluong" placeholder="69">
        </div>
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Số điện thoại liên hệ</label>
           <input type="text" class="form-control" name="number" placeholder="0987654321">
        </div>

        <div class="form-group">
    <label for="horizontal-form-1" class="bold-title">Ảnh mô tả</label>
    <input type="file" id="uploadInput" class="form-control" accept="image/*">
    <input type="text" class="form-control" name="image" id="image" class="form-control"  placeholder="Link Ảnh">
    <div id="message"></div>
</div>
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Mô tả sản phẩm</label>
           <input type="text" class="form-control" name="content" placeholder="Táo tươi không thuốc trừ sâu">
        </div>

                <div>
                    <br>
                    <button type="submit" name="muaban" class="btn btn-primary">Đăng Ngay</button>
                </div>
            </form>
        </div>
    </div>
</div>

                    
</div></div></div></div>


<script>
$(function() {
    $("#example").DataTable({
        "responsive": true,
        "autoWidth": false,
    });

});

</script>
<script>
$(function() {
    $('#summernote').summernote({
        placeholder: 'Điền nội dung',
        tabsize: 2,
        height: 400,
    });
})
</script> 
<script>
$(function() {
   $('#summernote').summernote({
        placeholder: 'Điền nội dung',
        tabsize: 2,
        height: 400,
    });
})
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