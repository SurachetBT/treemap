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
        // รับค่า tree_id ล่าสุด
        $tree = mysqli_insert_id($conn);
        // ส่งค่า tree_id ไปที่ image_process.php
        header("Location: image_porcess.php?tree_id=" . $tree);
        exit();
    } else {
        echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
    }
        // รับค่า tree_id ล่าสุด
        $treeID = mysqli_insert_id($conn);
        // ส่งค่า tree_id ไปที่ image_process.php
        header("Location: image_porcess.php");
        exit();
            
        }
    
    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($conn);

?>
