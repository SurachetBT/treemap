<!-- register.php -->
<?php 
include('db_connect.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลต้นไม้</title>
    <!-- เรียกใช้ CSS ของ Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <class="text-center p-4 border-2 border-dashed rounded-3">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title mb-4">ข้อมูลต้นไม้</h2>
                <form action="treeinfo_process.php" method="POST" enctype="multipart/form-data">
            
                    <div class="mb-3">
                        <label for="tree_name" class="form-label">ชื่อต้นไม้สามัญ:</label>
                        <input type="text" id="tree_name" name="tree_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="sci_name" class="form-label">ชื่อต้นไม้วิทยาศาสตร์:</label>
                        <input type="text" id="sci_name" name="sci_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="family" class="form-label">วงศ์พรรณไม้:</label>
                        <input type="text" id="Family" name="Family" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="Date_Time" class="form-label">วันที่ปลูก:</label>
                        <input type="date" id="Date_Time" name="Date_Time" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Hight_m" class="form-label">ความสูงของต้นไม้ (เมตร):</label>
                        <input type="text" id="Hight_m" name="Hight_m" class="form-control" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="Tree_Cicumference_cm" class="form-label">เส้นรอบวงต้นไม้ (เซนติเมตร):</label>
                        <input type="text" id="Tree_Cicumference_cm" name="Tree_Cicumference_cm" class="form-control" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="Status_Tree" class="form-label">สุขภาพของต้นไม้:</label>
                        <input type="text" id="Status_Tree" name="Status_Tree" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="properties" class="form-label">สรรพคุณของต้นไม้:</label>
                        <input type="text" id="properties" name="properties" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="upload" class="form-label">เลือกไฟล์รูปภาพ:</label>
                        <input type="file" id="upload" name="upload" class="form-control" accept="image/gif, image/jpeg, image/png">
                        <p class="small text-muted mt-2">เฉพาะไฟล์ JPG, JPEG, PNG & GIF เท่านั้น</p>

                    </div>

                    <input  type="submit" name="submit" class="btn btn-success">บันทึกข้อมูล</input>
                </form>
            </div>
        </div>
           </div>
           <div class="row">
            <?php if (!empty($statusMsg)) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $statusMsg; ?>
                </div>
                <?php } ?>
           </div>
    </div>
</div>

<!-- เรียกใช้ JavaScript ของ Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
