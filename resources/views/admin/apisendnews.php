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
if (!defined('IN_SITE')) {
  die('The Request Not Found');
}
if (isset($_POST['AddNoti']) && $_POST['AddNoti'] == '1') {
  if (isset($_FILES['voice']) && $_FILES['voice']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'data/voice/';
        $randomFilename = generateRandomFilename(10);
        $uploadFile = $uploadDir . $randomFilename . '.' . pathinfo($_FILES['voice']['name'], PATHINFO_EXTENSION);
        $voiceUrl = "https://1.fptbinhthuan.org/data/voice/" . $randomFilename . '.' . pathinfo($_FILES['voice']['name'], PATHINFO_EXTENSION);
    
    if (move_uploaded_file($_FILES['voice']['tmp_name'], $uploadFile)) {
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