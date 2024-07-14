<?php
define("IN_SITE", true);
require_once("../../core/DB.php");
require_once("../../core/helpers.php");
require_once("../../core/is_user.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if ($getUser['level'] != 'admin') {
        nnl_error_time("You are not admin, go away, shoo shoo! Bro không phải admin, đi đi!", BASE_URL('/'), 1000);
    }
    $NNL->truncate("muaban");
    nnl_success_time("Xóa thông báo thành công", BASE_URL('admin/muaban'), 1000);
}
