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
        $end_date = $_POST['end_date'];
        $tree_id = intval($_POST['tree_id']); // แปลงเป็น int เพื่อความปลอดภัย

        // ปรับปรุงข้อมูลในฐานข้อมูล
        $sql = "INSERT INTO locations (tree_id, Latitude, Longitude, Soil_type, is_current, start_date, end_date) 
                VALUES ('$tree_id', '$Latitude', '$Longitude', '$Soiltype', '$current', '$start_date','$end_date')";

        if($current == 1){
            $sql_update = "UPDATE locations SET is_current = 0 WHERE tree_id = $tree_id";
            $conn->query($sql_update);
        }

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลที่ตั้ง</title>
    <!-- เรียกใช้ CSS ของ Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <class="text-center p-4 border-2 border-dashed rounded-3">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title mb-4">ข้อมูลที่ตั้งใหม่</h2>
                <form action="update.php" method="POST" enctype="multipart/form-data">
                
                    <div class="mb-3">
                        <label for="tree_id" class="form-label">รหัสต้นไม้:</label>
                        <input type="text" id="tree_id" name="tree_id" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Latitude" class="form-label">Latitude(ละติจูด):</label>
                        <input type="text" id="Latitude" name="Latitude" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="Longitude" class="form-label">Longitude(ลองจิจูด):</label>
                        <input type="text" id="Longitude" name="Longitude" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="Soil_type" class="form-label">ประเภทดิน:</label>
                        <input type="text" id="Soil_type" name="Soil_type" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">วันที่เริ่มต้น:</label>
                        <input type="date" id="start_date" name="start_date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">วันที่สิ้นสุด:</label>
                        <input type="date" id="end_date" name="end_date" class="form-control">
                    </div>
                    <div class="form-check mb-3">
                        <label for="is_current" class="form-check-label">เป็นที่อยู่ปัจจุบัน</label>
                        <input type="checkbox" id="is_current" name="is_current" class="form-check-input">
                    </div>

                    <input  type="submit" name="submit" class="btn btn-success">บันทึกข้อมูล</input>
                </form>
            </div>
        </div>
           </div>
    </div>
</div>

<!-- เรียกใช้ JavaScript ของ Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>