<?php
include('db_connect.php'); // เชื่อมต่อฐานข้อมูล
$statusMsg = '';

$targetDir = "uploads/";

// ตรวจสอบว่าโฟลเดอร์ uploads มีอยู่หรือไม่ ถ้าไม่มีให้สร้าง
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

    $fileName = basename($_FILES["file"]["name"]);
    $fileName = str_replace(" ", "_", $fileName); // ป้องกันปัญหาชื่อไฟล์มีช่องว่าง
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $tree = isset($_POST['tree_id']) ? mysqli_real_escape_string($conn, $_POST['tree_id']) : null;

    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // ตรวจสอบว่าตัวแปร $conn เชื่อมต่อฐานข้อมูลได้หรือไม่
            if (!$conn) {
                die("❌ Database connection failed: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO imageshistory(Image_url_past, date_image, tree_id, status) 
                    VALUES ('$fileName', NOW(), '$tree', '1')"; // เพิ่มค่า default ของ status เป็น '1'

            $insert = mysqli_query($conn, $sql);

            if($insert){
                $statusMsg = "✅ The file <b>".$fileName."</b> has been uploaded successfully.";
            } else {
                $statusMsg = "❌ File upload failed: " . mysqli_error($conn);
            }
        } else {
            $statusMsg = "❌ Error uploading your file!";
        }
    } else {
        $statusMsg = "❌ Only JPG, JPEG, PNG, GIF, & PDF files are allowed.";
    }
} else {
    $statusMsg = "❌ Please select a file to upload!";
}

echo $statusMsg;
?>
