<?php
session_start();
include('db_connect.php'); // เชื่อมต่อฐานข้อมูล

$errors = array();

if (isset($_POST['submit'])) {
    // รับค่าจากฟอร์ม
    $tree_id = intval($_POST['tree_id']); // แปลงเป็นตัวเลขเพื่อความปลอดภัย
    $Height_m = floatval($_POST['Height_m']);
    $Tree_Circumference_cm = floatval($_POST['Tree_Cicumference_cm']);
    $date_height = $_POST['date_height'];
    $date_circumference = $_POST['date_circumference'];

    // 1️⃣ เพิ่มข้อมูลใหม่เข้าไปในตาราง treemeasurement
    $sql = "INSERT INTO treemeasurement (tree_id, Height_m, Tree_Cicumference_cm, date_height, date_circumference, role_id) 
            VALUES ('$tree_id', '$Height_m', '$Tree_Circumference_cm', '$date_height', '$date_circumference', 1)";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('✅ บันทึกข้อมูลสำเร็จ!'); window.location.href='menu.php';</script>";
    } else {
        echo "<script>alert('❌ ไม่สามารถบันทึกข้อมูล: " . mysqli_error($conn) . "');</script>";
    }
}
?>
