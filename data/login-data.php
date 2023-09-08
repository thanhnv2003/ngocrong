<?php
session_start();
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

// Lấy thông tin người dùng từ cơ sở dữ liệu dựa trên tên đăng nhập
$query = "SELECT id, username, password, ip_address, is_admin FROM account WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$user]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Kiểm tra mật khẩu
if ($user && $pass == $user['password']) {
    // Đăng nhập thành công, thực hiện hành động cần thiết
    $response['status'] = 1;
    $response['message'] = "Đăng nhập thành công";
    $_SESSION['account'] = $user;

    // Cập nhật địa chỉ IP trong cơ sở dữ liệu
    $updateIpQuery = "UPDATE account SET ip_address = ? WHERE id = ?";
    $stmt = $conn->prepare($updateIpQuery);
    $stmt->execute([$ip_address, $user['id']]);


} else {
    // Đăng nhập thất bại
    $response['status'] = 0;
    $response['message'] = "Tên tài khoản hoặc mật khẩu chưa đúng";
}
echo json_encode($response);
?>
