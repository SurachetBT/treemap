<?php
session_start();
include("db_connect.php"); // เชื่อมต่อฐานข้อมูล

$errors = array();


if (isset($_POST['submit'])) {
    $treename = mysqli_real_escape_string($conn, $_POST['tree_name']);
    $sciname = mysqli_real_escape_string($conn, $_POST['sci_name']);
    $family = mysqli_real_escape_string($conn, $_POST['Family']);
    $datetime = $_POST['Date_Time'];
    $Hight = floatval($_POST['Hight_m']);
    $TreeCicum = floatval($_POST['Tree_Cicumference_cm']);
    $Status = mysqli_real_escape_string($conn, $_POST['Status_Tree']);
    $properties = mysqli_real_escape_string($conn, $_POST['properties']);

    
    // เพิ่มข้อมูลลงฐานข้อมูล
    $sql = "INSERT INTO trees (tree_name, sci_name, Family, Date_Time, Hight_m, Tree_Cicumference_cm, Status_Tree, properties) 
            VALUES ('$treename', '$sciname', '$family', '$datetime', '$Hight', '$TreeCicum', '$Status', '$properties')";

    if (mysqli_query($conn, $sql)) {
        echo "บันทึกข้อมูลสำเร็จ!";
    } else {
        echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['action']) && $_POST['action'] == "upload_image") {
            include('image_porcess.php'); // ถ้าเป็นการอัปโหลด ให้ใช้ไฟล์ image_process.php
            exit(); // จบการทำงานทันที ไม่ให้โค้ดด้านล่างทำงานต่อ
        }
    
    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($conn);
}
}
?>
