<?php

if (!defined('IN_SITE')) {
    die('The Request Not Found');
}

if (isset($_COOKIE["token"])) {
    $getUser = $NNL->get_row(" SELECT * FROM `users` WHERE `token` = '".xss($_COOKIE['token'])."' ");
    if (!$getUser) {
        header("location: ".BASE_URL('client/logout'));
        exit();
    }
    $_SESSION['login'] = $getUser['token'];
}
if (!isset($_SESSION['login'])) {
    $my_username = false;
    $my_level = NULL;
} else {
    $getUser = $NNL->get_row(" SELECT * FROM `users` WHERE `token` = '".xss($_SESSION['login'])."'  ");
    // chuyển hướng đăng nhập khi thông tin login không tồn tại
    if (!$getUser) {
        redirect(BASE_URL('client/login'));
    }
    $my_username =True;
    $my_level = $getUser['level'];
    // chuyển hướng khi bị khoá tài khoản
    if ($getUser['banned'] != 0) {
        // redirect(BASE_URL('common/banned'));
    }

}
function CheckLogin()
{
    global $my_username;
    if($my_username != True)
    {
        return die('<script type="text/javascript">setTimeout(function(){ location.href = "'.BASE_URL('client/login').'" }, 0);</script>');
    }
}
function CheckAdmin()
{
    global $my_level;
    if($my_level != 'admin')
    {
        return die('<script type="text/javascript">setTimeout(function(){ location.href = "'.BASE_URL('').'" }, 0);</script>');
    }
}
function CheckCTV()
{
    global $my_level;
    if($my_level != 'ctv')
    {
        return die('<script type="text/javascript">setTimeout(function(){ location.href = "'.BASE_URL('').'" }, 0);</script>');
    }
}

