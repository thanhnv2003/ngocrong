<?php
session_start();

// Xóa phiên (session)
session_destroy();

// Chuyển hướng người dùng trở lại trang trước đó hoặc trang mặc định
if (isset($_SERVER['HTTP_REFERER'])) {
    header("Location: index.php");
} else {
    // Nếu không có trang trước đó, bạn có thể chuyển hướng đến một trang mặc định
    header("Location: index.php");
}
exit;
?>
