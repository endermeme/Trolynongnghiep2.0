<?php
$NNL = new DB;
function BASE_URL($url)
{
    $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"];
    if ($base_url == 'https://localhost') {
        $base_url = 'https://localhost';
    }
    return $base_url . '/' . $url;
}
function display_status_product($data)
{
    if ($data == 1) {
        $show = '<span class="badge badge-success">Hiển thị</span>';
    } elseif ($data == 0) {
        $show = '<span class="badge badge-danger">Ẩn</span>';
    }
    return $show;
}
function display5($data)
{
    if ($data == 'ON') {
        $show = '<span class="badge badge-success">Hiển thị</span>';
    } elseif ($data == 'OFF') {
        $show = '<span class="badge badge-danger">Ẩn</span>';
    }
    return $show;
}
function status_whmcs($text)
{
    if ($text == '0') {
        $status = '<span class="badge badge-danger">Tạm Ngưng</span>';
    } else {
        $status = '<span class="badge badge-success">Hoạt Động</span>';
    }
    return $status;
}
function status5($text)
{
    if ($text == 'dangxuly') {
        $status = '<span class="badge badge-danger">Chờ Duyệt</span>';
    } else {
        $status = '<span class="badge badge-success">Thành Công</span>';
    }
    return $status;
}
function statusnap($text)
{
    if ($text == 'dangxuly') {
        $status = '<span class="badge badge-danger">Chưa Thanh Toán</span>';
    } else {
        $status = '<span class="badge badge-success">Thành Công</span>';
    }
    return $status;
}

function status2($text)
{
    if ($text == 'tamdung') {
        $status = '<label class="status" style="--status-color: #ff6600">Đang khởi tạo</label>';
    } else if ($text == 'dahuy') {
        $status = '<span class="label label-danger" title="Đã hủy">
       Đã hủy
    </span>';
    } else if ($text == 'tamkhoa') {
        $status = '<span class="label label-danger" title="Tạm khóa">
        Tạm khóa
    </span>';
    } else if ($text == 'hoatdong') {
        $status = '<span class="label label-success" title="Active">
        Hoạt động
    </span>';
    }
    return $status;
}
function gethost($id, $row)
{
    global $NNL;
    return $NNL->get_row("SELECT * FROM `tbl_hosting` WHERE `id` = '$id' ")[$row];
}
function GetStatusCron($text)
{
    if ($text == 'baotri') {
        $status = '<label class="status" style="--status-color: #ff6600">Bảo Trì</label>';
    } else if ($text == 'hethan') {
        $status = '<span class="label label-danger" title="Hết Hạn">
       Đã hủy
    </span>';
    } else if ($text == 'tamdung') {
        $status = '<span class="label label-danger" title="Tạm Dừng">
        Tạm Dừng
    </span>';
    } else if ($text == 'loi') {
        $status = '<span class="badge badge-warning" title="Lỗi">
        Hoạt động
    </span>';
    } else if ($text == 'hoatdong') {
        $status = '<span class="label label-success" title="Active">
        Hoạt động
    </span>';
    }
    return $status;
}
function GetCodeCron($code)
{
    if ($code == 200) {
        $result = 'success(' . $code . ')';
    }
    if ($code != 200) {
        $result = 'error(' . $code . ')';
    }
    return $result;
}
function insert_log($user_id, $action)
{
    global $NNL;
    $NNL->insert("logs", [
        'user_id' => $user_id,
        'ip' => myip(),
        'device' => $_SERVER['HTTP_USER_AGENT'],
        'create_date' => gettime(),
        'action' => $action,
    ]);
}
function getRowRealtime($table, $id, $row)
{
    global $NNL;
    return $NNL->get_row("SELECT * FROM `$table` WHERE `id` = '$id' ")[$row];
}
function GetSvCron($id_server)
{
    global $NNL;
    $tnguyn = $NNL->get_row(" SELECT * FROM `server_cron_auto` WHERE `id` = '$id_server' AND `status` = 'ON' ");
    if ($tnguyn) {
        $result = $tnguyn['name'];
    } else {
        $result = 'Lỗi';
    }
    return $result;
}

function create_slug($string)
{
    $search = array(
        '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
        '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
        '#(ì|í|ị|ỉ|ĩ)#',
        '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
        '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
        '#(ỳ|ý|ỵ|ỷ|ỹ)#',
        '#(đ)#',
        '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
        '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
        '#(Ì|Í|Ị|Ỉ|Ĩ)#',
        '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
        '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
        '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
        '#(Đ)#',
        "/[^a-zA-Z0-9\-\_]/",
    );
    $replace = array(
        'a',
        'e',
        'i',
        'o',
        'u',
        'y',
        'd',
        'A',
        'E',
        'I',
        'O',
        'U',
        'Y',
        'D',
        '-',
    );
    $string = preg_replace($search, $replace, $string);
    $string = preg_replace('/(-)+/', '-', $string);
    $string = strtolower($string);
      $random_chars = "";
  for ($i = 0; $i < 5; $i++) {
    $random_chars .= chr(rand(97, 122)); 
    if (rand(0, 1)) { 
      $random_chars .= rand(0, 9);
    }
  }


  $slug = $string . '-' . $random_chars;

  return $slug;
}

function random($string, $int)
{
    return substr(str_shuffle($string), 0, $int);
}

function check_string($data)
{
    return trim(htmlspecialchars(addslashes($data)));
}
function check_exp($expiration_date)
{
    if (empty($expiration_date)) {
        return '<span class="badge badge-warning">Đang xử lý</span>';
    }
    $day = floor(($expiration_date - time()) / 86400);
    if ($day <= 0) {
        return '<span class="badge badge-danger">Hết hạn sử dụng</span>';
    }
    return '<span class="badge badge-success">Còn ' . $day . ' ngày</span>';
}
function check_s($last_updated_timestamp)
{
    if (empty($last_updated_timestamp)) {
        return '<span class="badge badge-warning">Đang xử lý</span>';
    }
    $seconds_ago = time() - $last_updated_timestamp;
    return '<span class="badge badge-success">Cập nhật cách đây ' . $seconds_ago . ' giây</span>';
}

function parse_order_id($des, $MEMO_PREFIX)
{
    $re = '/' . $MEMO_PREFIX . '\d+/im';
    preg_match_all($re, $des, $matches, PREG_SET_ORDER, 0);
    if (count($matches) == 0) {
        return null;
    }
    // Print the entire match result
    $orderCode = $matches[0][0];
    $prefixLength = strlen($MEMO_PREFIX);
    $orderId = intval(substr($orderCode, $prefixLength));
    return $orderId;
}
function xss($data)
{
    // Fix &entity\n;
    $data = str_replace(array('&amp;', '&lt;', '&gt;'), array('&amp;amp;', '&amp;lt;', '&amp;gt;'), $data);
    $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
    $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
    $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

    // Remove any attribute starting with "on" or xmlns
    $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

    // Remove javascript: and vbscript: protocols
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);


    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);


    $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

    do {

        $old_data = $data;
        $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
    } while ($old_data !== $data);


    $redsus = htmlspecialchars(addslashes(trim($data)));

    return $redsus;
}

function format_cash($price)
{
    return str_replace(",", ".", number_format($price));
}

function sale($money, $sale)
{
    $total = $money - ($money * $sale / 100);
    return format_cash($total);
}

function check_img($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = array("png", "jpeg", "jpg", "PNG", "JPEG", "JPG", "gif", "GIF", "svg");
    if (in_array($ext, $valid_ext)) {
        return true;
    }
}
function check_username($data)
{
    if (preg_match('/^[a-zA-Z0-9_-]{3,16}$/', $data, $matches)) {
        return true;
    } else {
        return false;
    }
}
function check_email($data)
{
    if (preg_match('/^.+@.+$/', $data, $matches)) {
        return true;
    } else {
        return false;
    }
}
function check_phone($data)
{
    if (preg_match('/^\+?(\d.*){3,}$/', $data, $matches)) {
        return true;
    } else {
        return false;
    }
}
function myip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    return $ip_address;
}
function gettime()
{
    return date('Y/m/d H:i:s', time());
}
function redirect($url)
{
    header("Location: {$url}");
    exit();
}
function nnl_error($text)
{
    return die('<script type="text/javascript">
    cuteToast({
        type: "error",
        message: "' . $text . '",
        timer: 5000
    });
    </script>');
}
function nnl_success($text)
{
    return die('<script type="text/javascript">
    cuteToast({
        type: "success",
        message: "' . $text . '",
        timer: 5000
    });
    </script>');
}

function nnl_success_time($text, $url, $time)
{
    return die('<script type="text/javascript">
    cuteToast({
        type: "success",
        message: "' . $text . '",
        timer: 5000
    });
    setTimeout(function(){ location.href = "' . $url . '" },' . $time . ');</script>');
}
function nnl_error_time($text, $url, $time)
{
    return die('<script type="text/javascript">
    cuteToast({
        type: "error",
        message: "' . $text . '",
        timer: 5000
    });
    setTimeout(function(){ location.href = "' . $url . '" },' . $time . ');</script>');
}
function status($data)
{
    if ($data == 'xuly') {
        $show = '<span class="status status-unpaid">Đang xử lý</span>';
    } else if ($data == 'hoantat') {
        $show = '<span class="status status-active">Đang hoạt động</span>';
    } else if ($data == 'nhandon') {
        $show = '<span class="status status-cancelled">Đang thực hiện reg vps</span>';
    } else if ($data == 'khoidong') {
        $show = '<span class="status status-cancelled">Đang thực hiện khởi động lại</span>';
    } else if ($data == 'doimatkhau') {
        $show = '<span class="status status-cancelled">Đang thực hiện đổi mật khẩu</span>';
    } else if ($data == 'thanhcong') {
        $show = '<span class="badge badge-success">Thành công</span>';
    } else if ($data == 'success') {
        $show = '<span class="badge badge-success">Success</span>';
    } else if ($data == 'thatbai') {
        $show = '<span class="badge badge-danger">Thất bại</span>';
    } else if ($data == 'error') {
        $show = '<span class="badge badge-danger">Error</span>';
    } else if ($data == 'loi') {
        $show = '<span class="badge badge-danger">Lỗi</span>';
    } else if ($data == 'huy') {
        $show = '<span class="badge badge-danger">Hủy</span>';
    } else if ($data == 'dangnap') {
        $show = '<span class="badge badge-warning">Đang đợi nạp</span>';
    } else if ($data == 2) {
        $show = '<span class="badge badge-success">Hoàn tất</span>';
    } else if ($data == 1) {
        $show = '<span class="badge badge-info">Đang xử lý</span>';
    } else {
        $show = '<span class="badge badge-warning">Khác</span>';
        
        
    }
    return $show;
}
function quantity($data)
{
    if ($data <= 0) {
        return '<span class="badge badge-danger">Hết Hàng</span>';
    } else {
        return '<span class="badge badge-success">Còn Hàng</span>';
    }
}

function getProduct($id, $row)
{
    global $NNL;
    return $NNL->get_row("SELECT * FROM `product` WHERE `id` = '$id' ")[$row];
}
function CategoryProduct($id, $row)
{
    global $NNL;
    return $NNL->get_row("SELECT * FROM `categories` WHERE `id` = '$id' ")[$row];
}

function getCategory($id, $row)
{
    global $NNL;
    return $NNL->get_row("SELECT * FROM `category_vps` WHERE `id` = '$id' ")[$row];
}

function curl_get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);

    curl_close($ch);
    return $data;
}
function display_capdo($data)
{
    $show = '<span class="badge badge-info">THÀNH VIÊN</span>';
    if ($data == "admin") {
        $show = '<span class="badge badge-danger">QUẢN TRỊ VIÊN</span>';
    } else if ($data == "ctv") {
        $show = '<span class="badge badge-success">CỘNG TÁC VIÊN</span>';
    }
    return $show;
}
function display_banned($data)
{
    if ($data == 1) {
        $show = '<span class="badge badge-danger">Banned</span>';
    } else if ($data == 0) {
        $show = '<span class="badge badge-success">Hoạt động</span>';
    }
    return $show;
}
function msg_success2($text)
{
    return die('<script type="text/javascript">Swal.fire("Thành Công", "' . $text . '","success");</script>');
}
function msg_error2($text)
{
    return die('<script type="text/javascript">Swal.fire("Thất Bại", "' . $text . '","error");</script>');
}
function msg_warning2($text)
{
    return die('<script type="text/javascript">Swal.fire("Thông Báo", "' . $text . '","warning");</script>');
}
function msg_success($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thành Công", "' . $text . '","success");
    setTimeout(function(){ location.href = "' . $url . '" },' . $time . ');</script>');
}
function msg_error($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thất Bại", "' . $text . '","error");
    setTimeout(function(){ location.href = "' . $url . '" },' . $time . ');</script>');
}
function msg_warning($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thông Báo", "' . $text . '","warning");
    setTimeout(function(){ location.href = "' . $url . '" },' . $time . ');</script>');
}

function admin_msg_success($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thành Công", "' . $text . '","success");
    setTimeout(function(){ location.href = "' . $url . '" },' . $time . ');</script>');
}
function admin_msg_error($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thất Bại", "' . $text . '","error");
    setTimeout(function(){ location.href = "' . $url . '" },' . $time . ');</script>');
}
function admin_msg_warning($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thông Báo", "' . $text . '","warning");
    setTimeout(function(){ location.href = "' . $url . '" },' . $time . ');</script>');
}
function display($data)
{
    if ($data == 'HIDE') {
        $show = '<span class="badge badge-danger">ẨN</span>';
    } else if ($data == 'SHOW') {
        $show = '<span class="badge badge-success">HIỂN THỊ</span>';
    }
    return $show;
}
function display2($data)
{
    if ($data == '0') {
        $show = '<span class="badge badge-danger">ẨN</span>';
    } else if ($data == '1') {
        $show = '<span class="badge badge-success">HIỂN THỊ</span>';
    } else if ($data == '2') {
        $show = '<span class="badge badge-info">CHỜ DUYỆT</span>';
    }
    return $show;
}
function display_2($data)
{
    if ($data == '0') {
        $show = '<span class="badge badge-danger">ẨN</span>';
    } else if ($data == '1') {
        $show = '<span class="badge badge-success">HIỂN THỊ</span>';
    }
    return $show;
}

function status_giahan($text)
{
    if ($text == '1') {
        $status = '<span class="badge badge-success">Có gia hạn</span>';
    }else if ($text == '0') {
        $status = '<span class="badge badge-danger">Không</span>';
    }
    return $status;
}


function format_date($time)
{
    return date("H:i:s d/m/Y", $time);
}
function checkHetHan($timestamp)
{
    $expiryDate = date('Y-m-d', $timestamp);
    $currentDate = date('Y-m-d');
    if ($expiryDate <= $currentDate) {
        return true;
    } else {
        return false;
    }
}
function blockHost($expiryTimestamp, $lockDays)
{
    $lockTimestamp = $expiryTimestamp + ($lockDays * 24 * 60 * 60); // Đổi số ngày thành giây
    $currentTimestamp = time();
    if ($currentTimestamp >= $lockTimestamp) {
        return true;
    } else {
        return false;
    }
}
function notiExpkHost($expiryTimestamp, $reminderDays)
{
    $reminderTimestamp = $expiryTimestamp - ($reminderDays * 24 * 60 * 60);
    $currentTimestamp = time();
    if ($currentTimestamp >= $reminderTimestamp) {
        return true;
    } else {
        return true;
    }
}
