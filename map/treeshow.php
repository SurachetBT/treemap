<?php 
include('db_connect.php'); 

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}  

$tree_id = isset($_GET['tree_id']) ? intval($_GET['tree_id']) : 0;
$tree_name = isset($_GET['tree_name']) ? $_GET['tree_name'] : '';

// ถ้ามี tree_id ให้ใช้มันค้นหา
if ($tree_id > 0) {
    $query = "SELECT * FROM trees WHERE tree_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $tree_id);
}
// ถ้าไม่มี tree_id แต่มี tree_name ให้ใช้ tree_name แทน
elseif (!empty($tree_name)) {
    $query = "SELECT * FROM trees WHERE tree_name = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $tree_name);
} else {
    die("โปรดระบุ tree_id หรือ tree_name");
}

$stmt->execute();
$result = $stmt->get_result();

// ตรวจสอบว่าพบข้อมูลหรือไม่
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $tree_id = $row['tree_id']; // เอา tree_id ที่ได้มาใช้หาข้อมูลอื่น
} else {
    die("ไม่พบข้อมูลต้นไม้");
}

// ดึงข้อมูลจากตาราง locations
$lol = "SELECT * FROM locations WHERE tree_id = ?";
$stmt_loc = $conn->prepare($lol);
$stmt_loc->bind_param("i", $tree_id);
$stmt_loc->execute();
$result_locations = $stmt_loc->get_result();

if ($result_locations && $result_locations->num_rows > 0) {
    $row_locations = $result_locations->fetch_assoc();
} else {
    die("No data found in locations table.");
}

// ดึงข้อมูลจากตาราง treecare
$care = "SELECT * FROM treecare WHERE tree_id = ?";
$stmt_care = $conn->prepare($care);
$stmt_care->bind_param("i", $tree_id);
$stmt_care->execute();
$result_treecare = $stmt_care->get_result();

if ($result_treecare && $result_treecare->num_rows > 0) {
    $row_treecare = $result_treecare->fetch_assoc();
} else {
    die("No data found in treecare table.");
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
    <p><strong>ประเภทดิน:</strong> <?php echo htmlspecialchars($row_locations['Soil_type']); ?></p>
    <p><strong>กิจกรรม:</strong> <?php echo htmlspecialchars($row_treecare['Activity']); ?></p>
    <p><strong>วันที่ดูแล:</strong> <?php echo htmlspecialchars($row_treecare['Care_date']); ?></p>

    <p><strong></strong> <img src="uploads/<?php echo htmlspecialchars($row['Image_url_past']); ?>" alt="Tree Image" style="max-width: 500px;"></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
