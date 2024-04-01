<?php
session_start(); // Bắt đầu phiên làm việc

ob_start();


// Hủy bỏ tất cả các biến phiên
$_SESSION = array();

// Nếu có phiên làm việc, hủy bỏ nó
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() + 3600, '/');
}

// Hủy bỏ phiên làm việc
session_destroy();

header("Location: login.php");
exit;
ob_end_flush();
?>
