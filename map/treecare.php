<?php
session_start();
include('db_connect.php'); // เชื่อมต่อฐานข้อมูล

$errors = array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treecare Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f0f9ff, #cbebff);
            font-family: 'Arial', sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #2d572c;
            font-weight: bold;
        }
        .btn-success {
            background-color: #2d572c;
            border: none;
        }
        .btn-success:hover {
            background-color: #1e3b1e;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">บันทึกการดูแลต้นไม้</h2>
                    <form action="treecare_process.php" method="POST">
                        <div class="mb-3">
                            <label for="tree_id" class="form-label">รหัสต้นไม้:</label>
                            <input type="number" id="tree_id" name="tree_id" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="Care_date" class="form-label">วันที่ดูแล:</label>
                            <input type="date" id="Care_date" name="Care_date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="Activity" class="form-label">กิจกรรม:</label>
                            <input type="text" id="Activity" name="Activity" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="remarks" class="form-label">หมายเหตุ:</label>
                            <input type="text" id="remarks" name="remarks" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success w-100">บันทึก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
