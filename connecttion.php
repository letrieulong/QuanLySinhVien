<?php 
// kết nối tới mysql
try {
$conn = mysqli_connect("localhost", "root", "admin", "connect") or die("Kết nối thất bại");
// câu lệnh truy vấn sql
echo "thanh cong";
$sql = "SELECT * FROM db";
// thực hiện cầu lên truy vấn và kết nối
$result = mysqli_query($conn, $sql);
// tạo một mảng
$arr = array();
echo "thanh cong";
while ($rows = mysqli_fetch_assoc($result)) {
	array_push($arr, $rows);
}
// xuất json
echo json_encode($arr);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

