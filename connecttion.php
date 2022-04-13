<?php 
$conn = mysqli_connect("localhost", "root", "admin", "connect") or die("Kết nối thất bại");
$sql = "SELECT * FROM db";
$result = mysqli_query($conn, $sql);
$arr = array();
echo "hellomanisdas";
?>

