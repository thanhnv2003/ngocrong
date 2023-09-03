<?php
//header('Content-Type: application/json');
include "../config/conn.php";
$conn = pdo_get_connection();
$user = $_POST['user'];
$pass = $_POST['pass'];

if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//Kiểm tra xem IP có phải là từ Proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//Kiểm tra xem IP có phải là từ Remote Address
else
{
    $ip_address = $_SERVER['REMOTE_ADDR'];
}

$response = array(
    'status' => 0,
    'message' => "Lỗi không xác định"
);
//$response = [];
// check username


$stmt = $conn->prepare( "SELECT username FROM account WHERE username = '$user'");
$stmt->execute();

// set the resulting array to associative

if( $stmt->rowCount() > 0){
    $response['status'] = 0;
    $response['message'] = "Tên tài khoản đã tồn tại";
}else{
    $sql1 = "INSERT INTO account (username, password, ip_address) VALUES ('$user', '$pass', '$ip_address')";
    // use exec() because no results are returned
    $result = $conn->exec($sql1);
    if($result){
        $response['status'] = 1;
        $response['ipaddress'] = $sql1;
        $response['message'] = "Đã tạo tài khoản thành công, vui lòng quay lại game đăng nhập và tạo nhân vật";
    }
}
echo json_encode($response);

?>