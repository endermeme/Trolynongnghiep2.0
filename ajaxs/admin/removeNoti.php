<?php
define("IN_SITE", true);
require_once("../../core/DB.php");
require_once("../../core/helpers.php");
require_once("../../core/is_user.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if ($getUser['level'] != 'admin') {
        nnl_error_time("Không thể thực hiện", BASE_URL('/'), 1000);
    }
    $id = xss($_POST['id']);
    $NNL->remove("notifications", " `id` = '$id' ");
    nnl_success_time("Xóa bài viết thành công", BASE_URL('admin/notification'), 1000);
}
