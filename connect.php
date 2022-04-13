<?php 
// kết nối tới mysql
$conn = mysqli_connect("us-cdbr-east-05.cleardb.net", "be5e9c603b0178", "8bbc452e", "connect");
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

