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
        admin_msg_success('L�0�6u th��nh c�0�0ng', '', 500);
      } else {
        // X��a file �0�4�0�0 t�5�7i l��n n�6�5u c�� l�6�9i khi l�0�6u v��o c�0�1 s�6�7 d�6�3 li�6�3u
        unlink($uploadFile);
        die('<script type="text/javascript">if(!alert("Th��m th�5�9t b�5�5i !")){window.history.back().location.reload();}</script>');
      }
    } else {
      die('C�� l�6�9i x�5�7y ra khi t�5�7i l��n file �0�9m thanh.');
    }
  } else {
    // X�6�1 l�0�5 khi ng�0�6�6�5i d��ng kh�0�0ng ch�6�9n file �0�9m thanh
    die('Thi�6�5u file �0�9m thanh!');
  }
}
?>