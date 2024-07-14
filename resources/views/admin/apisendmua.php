<?php
if (!defined('IN_SITE')) {
    die('The Request Not Found');
}



?>
<?php
if (isset($_POST['mua']) && $_POST['mua'] == 'mua') { //&& $getUser['level'] == 'admin') {

    $isInsert = $NNL->insert("muaban", [
                'name' => $_POST['name'],
                'number' => $_POST['number'],
                'soluong' => $_POST['soluong'],
                'image' => $_POST['image'],
                'content' => $_POST['content'],
                'status' => $_POST['status'],
    ]);
    
    if ($isInsert) {
    admin_msg_success('Lưu thành công', '', 500);
    } else {
    print("eror");
    }
    

} else {
    print("Key sai hoặc không đúng");
}
?>
