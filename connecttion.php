<?php 
$conn = mysqli_connect("localhost", "root", "admin", "connect") or die("Kết nối thất bại");
$sql = "SELECT * FROM db";
$result = mysqli_query($conn, $sql);
$arr = array();
while ($rows = mysqli_fetch_assoc($result)) {
	array_push($arr, $rows);
}
echo "hellomanisdas";
?>

