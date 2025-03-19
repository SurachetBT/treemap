<?php
include('db_connect.php'); // เชื่อมต่อฐานข้อมูล

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["tree_id"])) {
    $treeID = $_GET["tree_id"];

    if (!empty($_FILES["file"]["name"])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = basename($_FILES["file"]["name"]);
        $fileName = str_replace(" ", "_", $fileName);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');

        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // เพิ่มข้อมูลรูปภาพลงในฐานข้อมูล
                $sql = "INSERT INTO imageshistory(,Image_url_past, date_image,status) 
                        VALUES (tree_id$treeID,'$fileName', NOW(), '1')";
                
                if (mysqli_query($conn, $sql)) {
                    echo "✅ รูปภาพถูกบันทึกเรียบร้อย!";
                } else {
                    echo "❌ เพิ่มรูปภาพไม่สำเร็จ: " . mysqli_error($conn);
                }
            } else {
                echo "❌ อัปโหลดไฟล์ล้มเหลว!";
            }
        } else {
            echo "❌ รองรับไฟล์เฉพาะ JPG, JPEG, PNG, GIF, PDF เท่านั้น!";
        }
    } else {
        echo "❌ กรุณาเลือกไฟล์รูปภาพ!";
    }
} else {
    echo "❌ ไม่พบค่า tree_id!";
}
?>