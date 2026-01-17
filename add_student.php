<?php include 'db_connect.php'; ?>

<form method="POST">
    <input type="text" name="hoTen" placeholder="Họ tên" required><br>
    <input type="text" name="maSinhVien" placeholder="Mã SV" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit" name="btn_add">Thêm mới</button>
</form>

<?php
if (isset($_POST['btn_add'])) {
    $name = $_POST['hoTen'];
    $code = $_POST['maSinhVien'];
    $email = $_POST['email'];

    // Sử dụng Prepared Statement với dấu hỏi (?)
    $sql = "INSERT INTO students (hoTen, maSinhVien, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$name, $code, $email])) {
        echo "<p style='color:green;'>Thêm sinh viên thành công!</p>";
    }
}
?>