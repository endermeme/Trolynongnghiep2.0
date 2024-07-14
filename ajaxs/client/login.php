<?php
define("IN_SITE", true);
require_once("../../core/DB.php");
require_once("../../core/helpers.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //đăng nhập
    if (isset($_POST['action']) && $_POST['action'] = 'Login') {
        $username = xss($_POST['username']);
        $password = xss($_POST['password']);
        if (empty($username)) {
            die(json_encode([
                'status'    => 'error',
                'msg'       => 'Tài khoản không được để trống'
            ]));
        }
        if (empty($password)) {
            die(json_encode([
                'status'    => 'error',
                'msg'       => 'Mật khẩu không được để trống'
            ]));
        }
        if (check_username($username) != true) {
            die(json_encode(['status' => 'error', 'msg' => 'Tài khoản sai định dạng']));
        }
        $getUser = $NNL->get_row("SELECT * FROM `users` WHERE `username` = '$username' ");
        if (!$getUser) {
            die(json_encode([
                'status'    => 'error',
                'msg'       => 'Thông tin đăng nhập không chính xác'
            ]));
        }
        $Check = $NNL->get_row("SELECT * FROM `users` WHERE `username` = '$username' AND `password`='" . sha1($password) . "' ");
        if (!$Check) {
            if($getUser['login_attempts'] >= 5){
                $NNL->update("users", array(
                    'banned'     => 1
                ), " `id` = '" . $getUser['id'] . "' ");
                insert_log($getUser['id'],'Tài khoản của bạn đã bị tạm khoá do đang nhập sai nhiều lần');
                die(json_encode([
                    'status'    => 'error',
                    'msg'       => 'Tài khoản của bạn đã bị tạm khoá do đang nhập sai nhiều lần'
                ]));
            }
            $NNL->cong('users', 'login_attempts', 1, " `id` = '".$getUser['id']."' ");
            die(json_encode([
                'status'    => 'error',
                'msg'       => 'Thông tin đăng nhập không chính xác'
            ]));
        }
        if ($getUser['banned'] == 1) {
            die(json_encode([
                'status'    => 'error',
                'msg'       => 'Tài khoản của bạn đã bị khoá truy cập'
            ]));
        }

        $NNL->update("users", array(
            'login_attempts'    => 0,
            'device'        => $_SERVER['HTTP_USER_AGENT'],
            'ip'=>myip()
        ), " `id` = '" . $getUser['id'] . "' ");
        insert_log($getUser['id'],'Đăng nhập vào hệ thống');

        setcookie("token", $getUser['token'], time() + 86400, "/");
        $_SESSION['login'] = $getUser['token'];
        
        die(json_encode([
            'status' => 'success',
            'msg'    => 'Đăng nhập thành công'
        ]));
    }
}
