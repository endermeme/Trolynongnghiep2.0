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
    admin_msg_success('L�0�6u th��nh c�0�0ng', '', 500);
    } else {
    print("eror");
    }
    

} else {
    print("Key sai ho�6�7c kh�0�0ng �0�4��ng");
}
?>
