<?php 
include('db_connect.php'); 
require_once 'check_admin.php';
requireRole([1]); // Admin เท่านั้น ?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
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

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="bi bi-geo-alt-fill icon-header"></i>
                        <h2>ข้อมูลที่ตั้งต้นไม้</h2>
                    </div>

                    <form action="locations_process.php" method="POST" enctype="multipart/form-data">
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
                        <div class="form-check mb-3">
                            <input type="checkbox" id="is_current" name="is_current" class="form-check-input">
                            <label for="is_current" class="form-check-label">เป็นที่อยู่ปัจจุบัน</label>
                        </div>

                        <button type="submit" name="submit" class="btn btn-success w-100 btn-submit">
                            บันทึกข้อมูล
                        </button>
                        <a href="update.php" class="btn btn-info w-100 mt-2 btn-submit">
                            Update ข้อมูล
                        </a>
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
