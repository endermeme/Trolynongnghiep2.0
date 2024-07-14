<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
require_once('Header.php');
$title = 'Quản lý tin tức';
require_once(__DIR__ . "../../../../core/is_user.php");
		
?>
<?php

// Xử lý khi người dùng gửi thông tin
if (isset($_POST['AddNoti']) ) {
  // Kiểm tra xem người dùng đã chọn tập tin âm thanh hay chưa
  if (isset($_FILES['voice']) && $_FILES['voice']['error'] == UPLOAD_ERR_OK) {
    // Đường dẫn thư mục để lưu trữ file âm thanh
    $uploadDir = 'data/voice/';

    // Tên tập tin sau khi upload (có thể cần xử lý để tránh trùng lặp)
    $uploadFile = $uploadDir . basename($_FILES['voice']['name']);
    $voiceUrl = "https://1.fptbinhthuan.org/data/voice/" . basename($uploadFile);
    // Di chuyển tập tin từ thư mục tạm sang thư mục lưu trữ
    if (move_uploaded_file($_FILES['voice']['tmp_name'], $uploadFile)) {
      // Cập nhật cơ sở dữ liệu
      $isInsert = $NNL->insert("notifications", [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'voice' => $voiceUrl,
        'anh' => $_POST['anh'],
        'slug' => xss(create_slug($_POST['title'])),
        'status' => $_POST['status'],
        'create_date' => gettime()
      ]);

      if ($isInsert) {
        admin_msg_success('Lưu thành công', '', 500);
      } else {
        // Xóa file đã tải lên nếu có lỗi khi lưu vào cơ sở dữ liệu
        unlink($uploadFile);
        die('<script type="text/javascript">if(!alert("Thêm thất bại !")){window.history.back().location.reload();}</script>');
      }
    } else {
      die('Có lỗi xảy ra khi tải lên file âm thanh.');
    }
  } else {
    // Xử lý khi người dùng không chọn file âm thanh
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
        <h2 class="font-medium text-base mr-auto">Đổi mật khẩu</h2>
    </div>
    <div id="horizontal-form" class="p-5">
        <div class="preview">
<form class="using-password-strength" method="post"  role="form">
    <div class="custom-form">
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Mật khẩu cũ</label>
           <input type="password" class="form-control" name="existingpw" id="inputExistingPassword" placeholder="Nhập mật khẩu" required>
        </div>
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Mật khẩu mới</label>
           <input type="password" class="form-control" name="newpw" id="inputNewPassword1" placeholder="Nhập mật khẩu" required>
           
        </div>
        <div class="form-group">
            <label for="horizontal-form-1" class="bold-title">Nhập lại mật khẩu mới</label>
           <input type="password" class="form-control" name="confirmpw" id="inputNewPassword2" placeholder="Nhập mật khẩu" required>
        </div>
                <div>
                    <br>
                    <input class="btn btn-primary" onclick="changePassword()" type="button" value="Xác thực" />
                </div>
            </form>
        </div>
    </div>
</div>




                    </div>
                    
</div></div></div></div>

        <script>
            function changePassword() {
                cuteAlert({
                    type: "question",
                    title: "Xác Nhận Thay Đổi",
                    message: "Bạn có chắc chắn muốn thay đổi mật khẩu không ?",
                    confirmText: "Đồng Ý",
                    cancelText: "Hủy"
                }).then((e) => {
                    if (e) {
                        $.ajax({
                            url: "<?= BASE_URL("ajaxs/client/changeInfo.php"); ?>",
                            method: "POST",
                            dataType: "JSON",
                            data: {
                                action: "changePassword",
                                password: $('#inputExistingPassword').val(),
                                newpassword: $('#inputNewPassword1').val(),
                                renewpassword: $('#inputNewPassword2').val()
                            },
                            success: function(respone) {
                                if (respone.status == 'success') {
                                    cuteToast({
                                        type: "success",
                                        message: respone.msg,
                                        timer: 5000
                                    });
                                    setTimeout("location.href = '<?= BASE_URL('client/logout'); ?>';", 100);
                                } else {
                                    cuteAlert({
                                        type: "error",
                                        title: "Error",
                                        message: respone.msg,
                                        buttonText: "Okay"
                                    });
                                }
                            },
                            error: function() {
                                alert(html(response));
                                location.reload();
                            }
                        });
                    }
                })
            }
        </script>
<?php 
    require_once(__DIR__."/Footer.php");
?>