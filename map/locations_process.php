<?php  
     session_start();
     include("db_connect.php"); // เชื่อมต่อฐานข้อมูล
     
     $errors = array();

     if (isset($_POST['submit'])) {
        // รับค่าจากฟอร์ม
        $Latitude = floatval($_POST['Latitude']);
        $Longitude = floatval($_POST['Longitude']);
        $Soiltype = mysqli_real_escape_string($conn, $_POST['Soil_type']);
        $current = isset($_POST['is_current']) ? 1 : 0; // 1 = TRUE, 0 = FALSE
        $start_date = $_POST['start_date'];
        $tree_id = intval($_POST['tree_id']); // แปลงเป็น int เพื่อความปลอดภัย
    
        // 1️⃣ เพิ่มข้อมูลใหม่เข้าไปใน locations
        $sql = "INSERT INTO locations (tree_id, Latitude, Longitude, Soil_type, is_current, start_date) 
                VALUES ('$tree_id', '$Latitude', '$Longitude', '$Soiltype', '$current', '$start_date')";
        
        if (mysqli_query($conn, $sql)) {
            // 2️⃣ อัปเดตพิกัดล่าสุดของต้นไม้
            $sql_update = "UPDATE locations SET Latitude = '$Latitude', Longitude = '$Longitude' WHERE tree_id = $tree_id";
            $conn->query($sql_update);
    
            echo "บันทึกข้อมูลสำเร็จ!";
        } else {
            echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
        }
    }
    
?>