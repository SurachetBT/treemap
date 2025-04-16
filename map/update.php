<?php  
     session_start();
     include("db_connect.php"); // เชื่อมต่อฐานข้อมูล
     require_once 'check_admin.php';
     requireRole([1]); // Admin เท่านั้น 
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
               // 2️ อัปเดตพิกัดล่าสุดของต้นไม้
             $sql_update = "UPDATE locations SET Latitude = '$Latitude', Longitude = '$Longitude' WHERE tree_id = $tree_id";
             $conn->query($sql_update);
                echo "<script>alert('✅ บันทึกข้อมูลสำเร็จ!'); window.location.href='menu.php';</script>";
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

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <style>
        body {
            background: linear-gradient(to right, #dce35b, #45b649);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 50px;
            padding-left: 45px;
        }

        .form-group {
            position: relative;
        }

        .form-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }

        .btn-submit {
            border-radius: 50px;
            font-weight: bold;
        }

        .icon-header {
            font-size: 40px;
            color: #007bff;
        }
    </style>
</head>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- ขนาดเหมือนฟอร์มสมัครสมาชิก -->
            <div class="card p-4">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="bi bi-geo-alt-fill icon-header"></i>
                        <h2>ข้อมูลที่ตั้งต้นไม้</h2>
                    </div>

                    <form action="update.php" method="POST">
                        <div class="form-group mb-3">
                            <i class="bi bi-tag form-icon"></i>
                            <select id="tree_id" name="tree_id" class="form-select" required></select>
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-compass form-icon"></i>
                            <input type="text" id="Latitude" name="Latitude" class="form-control" placeholder="ละติจูด (Latitude)">
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-geo-fill form-icon"></i>
                            <input type="text" id="Longitude" name="Longitude" class="form-control" placeholder="ลองจิจูด (Longitude)">
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-textarea-resize form-icon"></i>
                            <input type="text" id="Soil_type" name="Soil_type" class="form-control" placeholder="ประเภทดิน">
                        </div>
                        <div class="form-group mb-3">
                            <label for="start_date">วันที่เริ่มอยู่</label> 
                             <i class="bi bi-calendar-plus form-icon"></i>
                            <input type="date" id="start_date" name="start_date" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="start_date">วันที่ย้ายออก</label>  
                            <i class="bi bi-calendar-x form-icon"></i>
                            <input type="date" id="end_date" name="end_date" class="form-control">
                        </div>
                        <div class="form-check mb-4">
                            <input type="checkbox" id="is_current" name="is_current" class="form-check-input">
                            <label for="is_current" class="form-check-label">เป็นที่อยู่ปัจจุบัน</label>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary w-100 btn-submit">
                            บันทึกข้อมูล
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- เรียกใช้ JavaScript ของ Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery + Select2 JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Select2 Init -->
<script>
 $('#tree_id').select2({
    placeholder: 'เลือกต้นไม้',
    ajax: {
        url: 'get_tree_ids.php',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
            return {
                results: data
            };
        },
        cache: true
    }
});
</script>
</body>

</html>