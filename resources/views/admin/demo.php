<?php

// Lấy dữ liệu raw từ POST hoặc PUT request
$rawData = file_get_contents('php://input');

// Giải mã dữ liệu JSON (nếu cần)
if (strpos($rawData, '{') === 0) {
    $data = json_decode($rawData, true);
} else {
    // Xử lý dữ liệu dạng khác (nếu có)
    $data = $_POST;
}

// In thông tin header
echo "\n**Thông tin Header:**\n";
foreach ($_SERVER as $key => $value) {
    if (strpos($key, 'HTTP_') === 0) {
        echo "$key: $value\n";
    }
}

// In dữ liệu request
echo "\n**Dữ liệu Request:**\n";
print_r($data);

// In custom data (nếu có)
if (isset($data['custom_data'])) {
    echo "\n**Custom Data:**\n";
    print_r($data['custom_data']);
}

?>