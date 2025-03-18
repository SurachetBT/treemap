<!-- db_connect.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "treemap";

// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($servername, $username, $password, $dbname);
// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>