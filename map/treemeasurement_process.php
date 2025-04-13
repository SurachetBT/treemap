<?php
session_start();
include('db_connect.php'); // เชื่อมต่อฐานข้อมูล

$errors = array();

if (isset($_POST['submit'])) {
    // รับค่าจากฟอร์ม
    $tree_id = intval($_POST['tree_id']); // แปลงเป็นตัวเลขเพื่อความปลอดภัย
    $Hight_m = mysqli_real_escape_string($conn, $_POST['Hight_m']);
    $Tree_Ciccumference_cm = mysqli_real_escape_string($conn, $_POST['Tree_Ciccumference_cm']);
    $date_height = $_POST['date_height'];
    $date_circumference = $_POST['date_circumference'];

    // 1️⃣ เพิ่มข้อมูลใหม่เข้าไปในตาราง treecare_measurement
    $sql = "INSERT INTO treecare_measurement (tree_id, Hight_m, Tree_Ciccumference_cm, date_height, date_circumference, role_id) 
            VALUES ('$tree_id', '$Hight_m', '$Tree_Ciccumference_cm', '$date_height', '$date_circumference', 1)";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('✅ บันทึกข้อมูลสำเร็จ!'); window.location.href='treemeasurement.php';</script>";
    } else {
        echo "<script>alert('❌ ไม่สามารถบันทึกข้อมูล: " . mysqli_error($conn) . "');</script>";
    }
}
?>
