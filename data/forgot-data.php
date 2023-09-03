<?php
session_start();
include "../config/conn.php";
$conn = pdo_get_connection();
$id = $_SESSION['account']['id'];
$oldPassword = $_POST['oldPassword'];
$pass = $_POST['pass'];
$repass = $_POST['passConfirm'];

$response = array(
    'status' => 0,
    'message' => "Lỗi không xác định"
);

$query = "SELECT id, username, password, ip_address FROM account WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    // Kiểm tra xem mật khẩu cũ trùng khớp với mật khẩu trong cơ sở dữ liệu
    if ($oldPassword == $user['password']) {
        // Kiểm tra xem hai mật khẩu mới có trùng nhau không
        if ($pass === $repass) {

            // Cập nhật mật khẩu mới vào cơ sở dữ liệu
            $updatePasswordQuery = "UPDATE account SET password = ? WHERE id = ?";
            $stmt = $conn->prepare($updatePasswordQuery);
            $stmt->execute([$pass, $id]);

            $response['status'] = 1;
            $response['message'] = "Cập nhật mật khẩu thành công";
        } else {
            $response['status'] = 0;
            $response['message'] = "Mật khẩu mới không trùng khớp";
        }
    } else {
        $response['status'] = 0;
        $response['message'] = "Mật khẩu cũ không đúng";
    }
} else {
    $response['status'] = 0;
    $response['message'] = "Không tìm thấy người dùng";
}

echo json_encode($response);

?>