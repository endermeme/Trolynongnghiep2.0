<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
require_once('Header.php');
$title = 'Quản lý sản phẩm';
require_once(__DIR__ . "../../../../core/is_user.php");
		
?>
<?php
if (isset($_POST['muaban'])  && $getUser['level'] == 'admin') {
            $isInsert = $NNL->insert("muaban", [
                'name' => $_POST['name'],
                'number' => $_POST['number'],
                'soluong' => $_POST['soluong'],
                'image' => $_POST['image'],
                'content' => $_POST['content'],
                'status' => $_POST['status'],
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
        <h2 class="font-medium text-base mr-auto">Thêm sản phẩm</h2>
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
                 <div class="form-group">
        <label for "exampleInputEmail1" class="bold-title">Trạng thái</label>
                    <select class="form-control" name="status" required>
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                </div>
                <div>
                    <br>
                    <button type="submit" name="muaban" class="btn btn-primary">Đăng Ngay</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-span-12 mt-6">
    <div class="intro-y block sm:flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">DANH SÁCH SẢN PHẨM</h2>
        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
            <!-- Các phần tử khác trong phần header của form -->
        </div>
    </div>
</div>
    <div class="p-5" id="head-options-table">
        <div class="preview">
            <div class="overflow-x-auto">
                <table class="table table-report -mt-2" id="example">
<thead>
<tr>
                                            <th style="width: 5px;">STT</th>
                                            <th>Tên</th>
                                             <th>Mô tả</th>
                                            <th>SĐT liên hệ</th>
                                            <th style="width: 20%">Thao tác</th>
                                        </tr>
                                    </thead>
                    <tbody>
                        
                                        <?php $i = 0;
                                        foreach ($NNL->get_list("SELECT * FROM `muaban` ORDER BY `id` DESC") as $row) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                
                                                <td>
                                                    <?= $row['name'] ?>
                                                </td>
                                                <td>
                                                    <?= $row['content'] ?>
                                                </td>
                                                <td>
                                                    <?= $row['number'] ?>
                                                </td>
                                                <td>
                                                    <button style="color:white;" onclick="RemoveRow(<?= $row['id'] ?>)" class="btn btn-danger btn-sm btn-icon-left " type="button">
                                                        <i class="fas fa-trash mr-1"></i><span class="">Xóa</span>
                                                    </button>
                                                    <a href="/admin/changemua/<?=$row['id']?>" class="btn btn-primary">
                                                   <i class="fa fa-edit"></i> Chỉnh sửa
                                                </a>

                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                        </table>
                                                    <button style="color:white;" onclick="RemoveAllSP(1)" class="btn btn-danger btn-sm btn-icon-left " type="button">
                                                        <i class="fa fa-edit"></i><span class="">XÓA TẤT CẢ SẢN PHẨM</span>
                                                    </button>
                    </div>
                    
</div></div></div></div>

<script type="text/javascript">
 
    
     function RemoveRow(id) {
        cuteAlert({
            type: "question",
            title: "Xác Nhận Xóa Bài Viết",
            message: "Bạn có đồng ý xóa bài viết này không ?",
            confirmText: "Đồng Ý",
            cancelText: "Hủy"
        }).then((e) => {
            if (e) {
                $.ajax({
                    url: "<?= BASE_URL('ajaxs/admin/removemua.php') ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(respone) {
                        $("#thongbao").html(respone);
                    },
                });
            }
        })
    }
</script>

<script type="text/javascript">
 
    
     function RemoveAllSP(id) {
        cuteAlert({
            type: "question",
            title: "Xác Nhận Xóa Toàn Bộ Dữ Liệu",
            message: "Bạn có đồng ý xóa toàn bộ sản phẩm không?",
            confirmText: "Đồng Ý",
            cancelText: "Hủy"
        }).then((e) => {
            if (e) {
                $.ajax({
                    url: "<?= BASE_URL('ajaxs/admin/deleteall.php') ?>",
                    method: "POST",
                    success: function(respone) {
                        $("#thongbao").html(respone);
                    },
                });
            }
        })
    }
</script>
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