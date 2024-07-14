<?php
define("IN_SITE", true);
require_once("../../core/DB.php");
require_once("../../core/helpers.php");
require_once("../../core/is_user.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'changeEmail') {
        $email = xss($_POST['email']);
        if (empty($_SESSION['login'])) {
            die(json_encode([
                'status'    => 'error',
                'msg'       => 'Vui lòng đăng nhập để thực hiện'
            ]));
        }
        if (check_email(xss($_POST['email'])) != true) {
            die(json_encode(['status' => 'error', 'msg' => 'Định dạng Email không đúng']));
        }
        if ($NNL->get_row("SELECT * FROM `users` WHERE `email` = '" . xss($_POST['email']) . "' ")) {
            die(json_encode(['status' => 'error', 'msg' => 'Email đã tồn tại, vui lòng chọn email khác']));
        }
        $isUpdate = $NNL->update("users", [
            'email' => xss($_POST['email']),
        ], " `id` = '" . $getUser['id'] . "' ");
        die(json_encode(['status' => 'success', 'msg' => 'Đã thay đổi Email thành công']));
    }
    if (isset($_POST['action']) && $_POST['action'] == 'changePassword') {
        $password = xss($_POST['password']);
        $newpassword = xss($_POST['newpassword']);
        $renewpassword = xss($_POST['renewpassword']);
        if (empty($_SESSION['login'])) {
            die(json_encode([
                'status'    => 'error',
                'msg'       => 'Vui lòng đăng nhập để thực hiện'
            ]));
        }
        if (empty($password)) {
            die(json_encode(['status' => 'error', 'msg' => 'Vui lòng nhập mật khẩu cũ']));
        }
        if (empty($newpassword)) {
            die(json_encode(['status' => 'error', 'msg' => 'Vui lòng nhập mật khẩu mới']));
        }
        if (empty($renewpassword)) {
            die(json_encode(['status' => 'error', 'msg' => 'Vui lòng nhập mật lại mật khẩu mới']));
        }
        if ($renewpassword != $newpassword) {
            die(json_encode(['status' => 'error', 'msg' => '2 mật khẩu không khớp nhau']));
        }
        if (!$NNL->get_row("SELECT * FROM `users` WHERE `token` = '" . $_SESSION['login'] . "' AND `password`='".sha1($password)."'")) {
            die(json_encode(['status' => 'error', 'msg' => 'Thông tin cũ không chính xác']));
        }
        $isUpdate = $NNL->update("users", [
            'password' => sha1($newpassword),
        ], " `id` = '" . $getUser['id'] . "' ");
        die(json_encode(['status' => 'success', 'msg' => 'Đã thay đổi mật khẩu thành công']));
    }
    
}
