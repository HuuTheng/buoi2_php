<?php
$host = 'localhost';
$dbname = '_buoi2.php';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Thiết lập chế độ báo lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Ghi log lỗi kỹ thuật ra file hoặc hệ thống (tùy chọn)
    // Hiển thị thông báo thân thiện cho người dùng
    die("Hệ thống đang bảo trì, vui lòng quay lại sau.");
}
?>