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

    // บันทึกข้อมูลเบื้องต้น (ยังไม่รวมรูปภาพ)
    $sql = "INSERT INTO trees (tree_name, sci_name, Family, Date_Time, Status_Tree, properties) 
            VALUES ('$treename', '$sciname', '$family', '$datetime', '$Status', '$properties')";

    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn); // ดึง id ของข้อมูลที่เพิ่งเพิ่ม
        $filename = "";

        // ถ้ามีการอัปโหลดไฟล์
        if (isset($_FILES['upload']) && $_FILES['upload']['error'] == 0) {
            $fileParts = explode('.', $_FILES['upload']['name']);
            $ext = strtolower(end($fileParts));
            $allowTypes = array('jpg', 'jpeg', 'png', 'gif');

            if (in_array($ext, $allowTypes)) {
                $filename = uniqid() . '.' . $ext;
                $targetPath = 'uploads/' . $filename;

                if (move_uploaded_file($_FILES['upload']['tmp_name'], $targetPath)) {
                    // อัปเดตชื่อไฟล์รูปใน record เดิม
                    $update_sql = "UPDATE trees SET Image_url_past='$filename' WHERE tree_id=$last_id";
                    mysqli_query($conn, $update_sql);
                    echo "<script>alert('✅ อัปโหลดไฟล์และอัปเดตข้อมูลสำเร็จ!'); window.location.href='locations.php';</script>";
                } else {
                    echo "❌ อัปโหลดไฟล์ไม่สำเร็จ!";
                }
            } else {
                echo "❌ นามสกุลไฟล์ไม่ถูกต้อง (อนุญาตเฉพาะ JPG, JPEG, PNG, GIF)";
            }
        }

        echo "<script>alert('✅ บันทึกข้อมูลสำเร็จ!'); window.location.href='locations.php';</script>";
    } else {
        echo "<script>alert('❌ ไม่สามารถบันทึกข้อมูล: " . mysqli_error($conn) . "');</script>";
    }
}
?>
