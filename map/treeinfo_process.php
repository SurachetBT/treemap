<?php
session_start();
include("db_connect.php"); // เชื่อมต่อฐานข้อมูล

$errors = array();

if (isset($_POST['submit'])) {
    $treename = mysqli_real_escape_string($conn, $_POST['tree_name']);
    $sciname = mysqli_real_escape_string($conn, $_POST['sci_name']);
    $family = mysqli_real_escape_string($conn, $_POST['Family']);
    $datetime = $_POST['Date_Time'];
    $Status = mysqli_real_escape_string($conn, $_POST['Status_Tree']);
    $properties = mysqli_real_escape_string($conn, $_POST['properties']);
    $filename = ""; // กำหนดค่าเริ่มต้น

    // ตรวจสอบว่ามีการอัปโหลดไฟล์หรือไม่
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] == 0) {
        $fileParts = explode('.', $_FILES['upload']['name']); // แยกชื่อไฟล์ออกจากนามสกุล
        $ext = strtolower(end($fileParts)); // ดึงส่วนท้ายสุดมาเป็นนามสกุลไฟล์
        $allowTypes = array('jpg', 'jpeg', 'png', 'gif'); // ประเภทไฟล์ที่อนุญาต

        if (in_array($ext, $allowTypes)) {
            $filename = uniqid() . '.' . $ext; // ตั้งชื่อไฟล์ใหม่
            $targetPath = 'uploads/' . $filename;

            if (move_uploaded_file($_FILES['upload']['tmp_name'], $targetPath)) {
                echo "✅ อัปโหลดไฟล์สำเร็จ!";
            } else {
                echo "❌ อัปโหลดไฟล์ไม่สำเร็จ!";
            }
        } else {
            echo "❌ นามสกุลไฟล์ไม่ถูกต้อง (อนุญาตเฉพาะ JPG, JPEG, PNG, GIF)";
        }
    } else {
        echo "❌ ไม่มีไฟล์ถูกอัปโหลด!";
    }

    // เพิ่มข้อมูลลงฐานข้อมูล
    $sql = "INSERT INTO trees (tree_name, sci_name, Family, Date_Time, Status_Tree, properties, Image_url_past) 
            VALUES ('$treename', '$sciname', '$family', '$datetime', '$Status', '$properties', '$filename')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('✅ บันทึกข้อมูลสำเร็จ!'); window.location.href='locations.php';</script>";
    } else {
        "<script>alert('❌ ไม่สามารถบันทึกข้อมูล: " . mysqli_error($conn) . "');</script>";
    }
}
?>
