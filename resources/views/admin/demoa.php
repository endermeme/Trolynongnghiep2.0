

<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
require_once('Header.php');
$title = 'Quản lý thông báo  | ' . $NNL->site('tenweb');
require_once(__DIR__ . "../../../../core/is_user.php");
		
?>
<?php
if (isset($_POST['AddNoti']) && $_POST['AddNoti'] == '1') {
    // Kiểm tra xem người dùng đã chọn tập tin ảnh hay chưa
    if (isset($_FILES['voice']) && $_FILES['voice']['error'] == UPLOAD_ERR_OK) {
        // Đường dẫn thư mục để lưu trữ ảnh
        $uploadDir = 'data/voice/';
        
        // Tên tập tin sau khi upload (có thể cần xử lý để tránh trùng lặp)
        $uploadFile = $uploadDir . basename($_FILES['voice']['name']);
        
        // Di chuyển tập tin từ thư mục tạm sang thư mục lưu trữ
        if (move_uploaded_file($_FILES['voice']['tmp_name'], $uploadFile)) {
            // Thực hiện việc lưu thông báo vào cơ sở dữ liệu với đường dẫn ảnh
            $isInsert = $NNL->insert("notifications", [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'voice' => $uploadFile,
                'anh' => $_POST['anh'],
                'slug' => xss(create_slug($_POST['title'])),
                'status' => $_POST['status'],
                'create_date' => gettime()
            ]);
            
            if ($isInsert) {
                admin_msg_success('Lưu thành công', '', 500);
            } else {
                // Xóa tập tin đã tải lên nếu có lỗi khi lưu vào cơ sở dữ liệu
                unlink($uploadFile);
                die('<script type="text/javascript">if(!alert("Thêm thất bại !")){window.history.back().location.reload();}</script>');
            }
        } else {
            die('Có lỗi xảy ra khi tải lên ảnh.');
        }
    } else {
        // Xử lý khi người dùng không chọn ảnh
        die('Thiếu ảnh hoặc key!');
    }
}
?>



<style>
    .custom-form {
        display: flex;
        flex-wrap: wrap;
    }

    .custom-form .form-group {
        width: 100%; 
        padding: 5px;
    }

    .custom-form .form-control {
        width: 100%;
        padding: 12px;
    }

    @media (max-width: 768px) {
        .custom-form .form-group {
            width: 100%; 
        }
    }
</style>
           <div class="intro-y box mt-5">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">THÔNG BÁO</h2>
    </div>
    <div id="horizontal-form" class="p-5">
        <div class="preview">
<form action="" method="post" enctype="multipart/form-data">
    <div class="custom-form">
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Tiêu đề</label>
           <input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề" required>
        </div>
        <div class="form-group">
    <label for="horizontal-form-1" class="bold-title">Banner</label>
    <input type="file" class="form-control" name="anh" accept="image/*" required>
</div>
        <div class="form-group">
            <label for="horizontal-form-2" class="bold-title">Thông báo</label>
             <textarea id="summernote" name="content"></textarea>
        </div>
   
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
                    <button type="submit" name="AddNoti" class="btn btn-primary">Đăng Ngay</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-span-12 mt-6">
    <div class="intro-y block sm:flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">DANH SÁCH THÔNG BÁO</h2>
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
                                            <th>Tiêu đề</th>
                                             <th>link</th>
                                            <th>Thời gian</th>
                                            <th style="width: 20%">Thao tác</th>
                                        </tr>
                                    </thead>
                    <tbody>
                                        <?php $i = 0;
                                        foreach ($NNL->get_list("SELECT * FROM `notifications` ORDER BY `id` DESC") as $row) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                
                                                <td>
                                                    <?= $row['title'] ?>
                                                </td>
                                                <td>
                                                    <?= $row['slug'] ?>
                                                </td>
                                                <td>
                                                    <?= $row['create_date'] ?>
                                                </td>
                                                <td>
                                                    <button style="color:white;" onclick="RemoveRow(<?= $row['id'] ?>)" class="btn btn-danger btn-sm btn-icon-left m-b-10" type="button">
                                                        <i class="fas fa-trash mr-1"></i><span class="">Delete</span>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                        </table>
                    </div>
                    
</div></div></div></div>

<script type="text/javascript">
 
    
     function RemoveRow(id) {
        cuteAlert({
            type: "question",
            title: "Xác Nhận Xóa Thông Báo",
            message: "Bạn có đồng ý xóa thông báo này không ?",
            confirmText: "Đồng Ý",
            cancelText: "Hủy"
        }).then((e) => {
            if (e) {
                $.ajax({
                    url: "<?= BASE_URL('ajaxs/admin/removeNoti.php') ?>",
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

<script>
$(function() {
    $("#example").DataTable({
        "responsive": true,
        "autoWidth": false,
    });

});
CKEDITOR.replace("content");
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


<?php 
    require_once(__DIR__."/Footer.php");
?>
?>