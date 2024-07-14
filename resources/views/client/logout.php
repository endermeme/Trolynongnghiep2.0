<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
//require_once (__DIR__.'/../../../models/is_user.php');

setcookie('token', null, -1, '/');
//setcookie("token", "", time() - $CMSNT->site('session_login'));
session_destroy();
redirect(BASE_URL('client/home'));
?>

