<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
// kết nối tới mysql
$conn = mysqli_connect("localhost", "root", "admin", "connect");
// câu lệnh truy vấn sql
$sql = "SELECT * FROM db";
// thực hiện cầu lên truy vấn và kết nối
$result = mysqli_query($conn, $sql);
// tạo một mảng
$arr = array();

while ($rows = mysqli_fetch_assoc($result)) {
	array_push($arr, $rows);
}
// xuất json
echo json_encode($arr);

?>
</body>
</html>
