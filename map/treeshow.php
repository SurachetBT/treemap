<?php 
include('db_connect.php'); 

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$tree_id = isset($_GET['tree_id']) ? $_GET['tree_id'] : 0;
// ดึงข้อมูลจากตาราง trees
$query = "SELECT * FROM trees WHERE tree_id = $tree_id";
$result = mysqli_query($conn, $query) or die("Query failed: " . mysqli_error($conn));

// ตรวจสอบว่ามีข้อมูลจากตาราง trees หรือไม่
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
// ดึงข้อมูลจากตาราง locations
$lol = "SELECT * FROM locations WHERE tree_id = $tree_id";
$result_locations = mysqli_query($conn, $lol) or die("Query failed: " . mysqli_error($conn));

// ตรวจสอบว่ามีข้อมูลจากตาราง locations หรือไม่
if ($result_locations && mysqli_num_rows($result_locations) > 0) {
    $row_locations = mysqli_fetch_assoc($result_locations);
} else {
    die("No data found in locations table.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลต้นไม้</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>ข้อมูลต้นไม้</h2>
    <p><strong>ชื่อต้นไม้สามัญ:</strong> <?php echo htmlspecialchars($row['tree_name']); ?></p>
    <p><strong>ชื่อต้นไม้วิทยาศาสตร์:</strong> <?php echo htmlspecialchars($row['sci_name']); ?></p>
    <p><strong>วงศ์พรรณไม้:</strong> <?php echo htmlspecialchars($row['Family']); ?></p>
    <p><strong>วันที่ปลูก:</strong> <?php echo htmlspecialchars($row['Date_Time']); ?></p>
    <p><strong>ความสูงของต้นไม้ (เมตร):</strong> <?php echo htmlspecialchars($row['Hight_m']); ?></p>
    <p><strong>เส้นรอบวงต้นไม้ (เซนติเมตร):</strong> <?php echo htmlspecialchars($row['Tree_Cicumference_cm']); ?></p>
    <p><strong>สุขภาพของต้นไม้:</strong> <?php echo htmlspecialchars($row['Status_Tree']); ?></p>
    <p><strong>สรรพคุณของต้นไม้:</strong> <?php echo htmlspecialchars($row['properties']); ?></p>
    <p><strong>Latitude:</strong> <?php echo htmlspecialchars($row_locations['Latitude']); ?></p>
    <p><strong>Longitude:</strong> <?php echo htmlspecialchars($row_locations['Longitude']); ?></p>
    <p><strong></strong> <img src="uploads/<?php echo htmlspecialchars($row['Image_url_past']); ?>" alt="Tree Image" style="max-width: 500px;"></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
