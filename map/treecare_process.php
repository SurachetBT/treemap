<?php
session_start();
include('db_connect.php'); // เชื่อมต่อฐานข้อมูล

$errors = array();

if (isset($_POST['submit'])) {
    // รับค่าจากฟอร์ม
    $Activity = mysqli_real_escape_string($conn, $_POST['Activity']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);
    $Care_date = $_POST['Care_date'];
    $tree_id = intval($_POST['tree_id']); // แปลงเป็น int เพื่อความปลอดภัย

    // 1️⃣ เพิ่มข้อมูลใหม่เข้าไปใน treecare
    $sql = "INSERT INTO treecare (tree_id, Activity, remarks, Care_date, role_id) 
            VALUES ('$tree_id', '$Activity', '$remarks', '$Care_date', 1)";
    
    if (mysqli_query($conn, $sql)) {
        echo "✅ บันทึกข้อมูลสำเร็จ!";
    } else {
        echo "❌ ไม่สามารถบันทึกข้อมูล: " . mysqli_error($conn);
    }
}
?>

