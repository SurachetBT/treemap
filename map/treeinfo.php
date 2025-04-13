<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลต้นไม้</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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

        .form-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }

        .form-group {
            position: relative;
        }

        .btn-submit {
            border-radius: 50px;
            font-weight: bold;
        }

        .icon-header {
            font-size: 40px;
            color: #28a745;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- กำหนดขนาดให้ตรงกับหน้าสมัครสมาชิก -->
            <div class="card p-4">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="bi bi-flower3 icon-header"></i>
                        <h2>ข้อมูลต้นไม้</h2>
                    </div>

                    <form action="treeinfo_process.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <i class="bi bi-tree-fill form-icon"></i>
                            <input type="text" id="tree_name" name="tree_name" class="form-control" placeholder="ชื่อต้นไม้สามัญ">
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-journal-text form-icon"></i>
                            <input type="text" id="sci_name" name="sci_name" class="form-control" placeholder="ชื่อต้นไม้วิทยาศาสตร์">
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-diagram-3 form-icon"></i>
                            <input type="text" id="Family" name="Family" class="form-control" placeholder="วงศ์พรรณไม้">
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-calendar-date form-icon"></i>
                            <input type="date" id="Date_Time" name="Date_Time" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-arrows-vertical form-icon"></i>
                            <input type="text" id="Hight_m" name="Hight_m" class="form-control" placeholder="ความสูง (เมตร)" step="0.01" required>
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-circle-half form-icon"></i>
                            <input type="text" id="Tree_Cicumference_cm" name="Tree_Cicumference_cm" class="form-control" placeholder="เส้นรอบวง (เซนติเมตร)" step="0.01" required>
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-heart-pulse form-icon"></i>
                            <input type="text" id="Status_Tree" name="Status_Tree" class="form-control" placeholder="สุขภาพของต้นไม้">
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-capsule form-icon"></i>
                            <input type="text" id="properties" name="properties" class="form-control" placeholder="สรรพคุณของต้นไม้">
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-image form-icon"></i>
                            <input type="file" id="upload" name="upload" class="form-control" accept="image/gif, image/jpeg, image/png">
                            <p class="small text-muted mt-2">เฉพาะไฟล์ JPG, JPEG, PNG & GIF เท่านั้น</p>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success w-100 btn-submit">บันทึกข้อมูล</button>
                    </form>

                    <?php if (!empty($statusMsg)) { ?>
                        <div class="alert alert-success mt-3" role="alert">
                            <?php echo $statusMsg; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
