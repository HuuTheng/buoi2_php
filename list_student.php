<?php
include 'db_connect.php';

// 1. Truy vấn dữ liệu
$stmt = $conn->prepare("SELECT * FROM students");
$stmt->execute();

// 2. Lấy tất cả kết quả về mảng
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background: #f2f2f2;">
            <th>ID</th>
            <th>Họ Tên</th>
            <th>Mã SV</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $row): ?>
            <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo htmlspecialchars($row['hoTen']); ?></td>
                <td><?php echo htmlspecialchars($row['maSinhVien']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td>
                    <a href="#">Sửa</a> |
                    <a href="#" onclick="return confirm('Xác nhận xóa?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>