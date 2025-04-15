<?php
include('db_connect.php');
$errors = array();
require_once 'check_admin.php';
requireRole([1,2]); // Admin และ Employee มีสิทธิ์เข้าถึง
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกการวัดต้นไม้</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #dce35b, #45b649);
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .card-title {
            color: #2d572c;
            font-weight: 700;
            text-align: center;
        }
        label.form-label {
            font-weight: 500;
            color: #333;
        }
        .form-control, .form-select {
            border-radius: 10px;
        }
        .btn-success {
            background-color: #2d572c;
            border: none;
            font-weight: bold;
            border-radius: 30px;
            padding: 10px;
        }
        .btn-success:hover {
            background-color: #1e3b1e;
        }
        .select2-container--default .select2-selection--single {
            border-radius: 10px;
            height: 38px;
            padding: 5px 10px;
        }
        .select2-selection__arrow {
            top: 6px !important;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card p-4">
                <div class="card-body">
                    <h3 class="card-title mb-4"><i class="bi bi-rulers"></i> บันทึกการวัดต้นไม้</h3>
                    <form action="treemeasurement_process.php" method="POST">
                        <div class="mb-3">
                            <label for="tree_id" class="form-label"><i class="bi bi-tree"></i> เลือกต้นไม้:</label>
                            <select id="tree_id" name="tree_id" class="form-select" required></select>
                        </div>
                        <div class="mb-3">
                            <label for="Height_m" class="form-label"><i class="bi bi-arrow-up"></i> ความสูง (เมตร):</label>
                            <input type="text" id="Height_m" name="Height_m" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="Tree_Cicumference_cm" class="form-label"><i class="bi bi-circle"></i> เส้นรอบวง (ซม.):</label>
                            <input type="text" id="Tree_Cicumference_cm" name="Tree_Cicumference_cm" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="date_height" class="form-label"><i class="bi bi-calendar-date"></i> วันที่วัดความสูง:</label>
                            <input type="date" id="date_height" name="date_height" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="date_circumference" class="form-label"><i class="bi bi-calendar-date-fill"></i> วันที่วัดเส้นรอบวง:</label>
                            <input type="date" id="date_circumference" name="date_circumference" class="form-control" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success w-100">
                            <i class="bi bi-save2-fill"></i> บันทึกข้อมูล
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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

