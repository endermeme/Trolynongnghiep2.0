<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
require_once('Header.php');
$title = 'Quản lý tin tức';
require_once(__DIR__ . "../../../../core/is_user.php");
		
?>
<?php
function generateRandomFilename($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomFilename = '';
    for ($i = 0; $i < $length; $i++) {
        $randomFilename .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomFilename;
}
?>
<?php
if (isset($_POST['upnow']) ) {
    if (isset($_FILES['voice']) && $_FILES['voice']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'data/voice/';
        $randomFilename = generateRandomFilename(10);
        $uploadFile = $uploadDir . $randomFilename . '.' . pathinfo($_FILES['voice']['name'], PATHINFO_EXTENSION);
        $link = "https://1.fptbinhthuan.org/data/voice/" . $randomFilename . '.' . pathinfo($_FILES['voice']['name'], PATHINFO_EXTENSION);

        if (move_uploaded_file($_FILES['voice']['tmp_name'], $uploadFile)) {
            $isInsert = "a";

            if ($isInsert) {
                admin_msg_success($link, '', 4567);
            } else {
                unlink($uploadFile);
                die('<script type="text/javascript">if(!alert("Thêm thất bại !")){window.history.back().location.reload();}</script>');
            }
        } else {
            die('Có lỗi xảy ra khi tải lên file âm thanh.');
        }
    } else {
        die('Thiếu file âm thanh!');
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
        <h2 class="font-medium text-base mr-auto">Công cụ up file lấy link</h2>
    </div>
    <div id="horizontal-form" class="p-5">
        <div class="preview">
<form action="" method="post" enctype="multipart/form-data">
    <div class="custom-form">

        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Up file lấy link </label>
           <input type="file" class="form-control" name="voice" >
        </div>
                <div>
                    <br>
                    <button type="submit" name="upnow" class="btn btn-primary">Up file lấy link</button>
                </div>
                </form>
        <div class="form-group">
    <label for="horizontal-form-1" class="bold-title">Up ảnh lấy link</label>
    <input type="file" id="uploadInput" class="form-control" accept="image/*">
    <input type="text" class="form-control" name="anh" id="image" class="form-control"  placeholder="Link Ảnh">
    <div id="message"></div>
</div>




        </div>
    </div>
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