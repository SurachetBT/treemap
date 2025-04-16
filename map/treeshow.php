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

$measurement = "
    SELECT m.*
    FROM treemeasurement m
    INNER JOIN (
        SELECT tree_id, MAX(date_height) AS latest_date
        FROM treemeasurement
        WHERE tree_id = ?
    ) AS latest
    ON m.tree_id = latest.tree_id AND m.date_height = latest.latest_date
";

$stmt_measurement = $conn->prepare($measurement);
$stmt_measurement->bind_param("i", $tree_id);
$stmt_measurement->execute();
$result_treemeasurement = $stmt_measurement->get_result();

if ($result_treemeasurement && $result_treemeasurement->num_rows > 0) {
    $row_treemeasurement = $result_treemeasurement->fetch_assoc();
} else {
    die("ไม่พบข้อมูลการวัดต้นไม้ล่าสุดของต้นนี้");
}


?>


<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลต้นไม้</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color:rgb(127, 255, 157);
        }
        .card {
            margin-bottom: 20px;
        }
        img.tree-img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin-bottom: 30px;
        }
        .menu-button {
            display: inline-flex;
            align-items: center;
            padding: 12px 20px;
            background-color: #ff69b4;
            color: white;
            font-size: 16px;
            font-weight: 600;
            border-radius: 30px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 4px 12px rgba(255, 105, 180, 0.4);
            position: relative;
            overflow: hidden;
            margin: 30px auto;
            display: table;
        }

        .menu-button .circle {
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 50%;
            margin-right: 10px;
            animation: pulse 1.5s infinite;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h2 class="text-center"><i class="bi bi-tree-fill"></i> ข้อมูลต้นไม้</h2>

    <div class="card p-4 shadow-sm">
        <h5 class="card-title">🌿 รายละเอียดต้นไม้</h5>
        <p><strong>ตำเเหน่งต้นไม้:</strong> <?php echo htmlspecialchars($row['tree_id']); ?></p>
        <p><strong>ชื่อสามัญ:</strong> <?php echo htmlspecialchars($row['tree_name']); ?></p>
        <p><strong>ชื่อวิทยาศาสตร์:</strong> <?php echo htmlspecialchars($row['sci_name']); ?></p>
        <p><strong>วงศ์พรรณไม้:</strong> <?php echo htmlspecialchars($row['Family']); ?></p>
        <p><strong>วันที่ปลูก:</strong> <?php echo htmlspecialchars($row['Date_Time']); ?></p>
        <p><strong>สุขภาพของต้นไม้:</strong> <?php echo htmlspecialchars($row['Status_Tree']); ?></p>
        <p><strong>สรรพคุณ:</strong> <?php echo htmlspecialchars($row['properties']); ?></p>
    </div>

    <div class="card p-4 shadow-sm">
        <h5 class="card-title">📏 ข้อมูลการวัด</h5>
        <p><strong>ความสูง (เมตร):</strong> <?php echo htmlspecialchars($row_treemeasurement['Height_m']); ?></p>
        <p><strong>เส้นรอบวง (ซม.):</strong> <?php echo htmlspecialchars($row_treemeasurement['Tree_Cicumference_cm']); ?></p>
        <p><strong>วันที่วัดความสูง:</strong> <?php echo htmlspecialchars($row_treemeasurement['date_height']); ?></p>
        <p><strong>วันที่วัดเส้นรอบวง:</strong> <?php echo htmlspecialchars($row_treemeasurement['date_circumference']); ?></p>
    </div>

    <div class="card p-4 shadow-sm">
        <h5 class="card-title">📍 สถานที่ปลูก</h5>
        <p><strong>ละติจูด:</strong> <?php echo htmlspecialchars($row_locations['Latitude']); ?></p>
        <p><strong>ลองจิจูด:</strong> <?php echo htmlspecialchars($row_locations['Longitude']); ?></p>
        <p><strong>ประเภทดิน:</strong> <?php echo htmlspecialchars($row_locations['Soil_type']); ?></p>
    </div>

    <div class="card p-4 shadow-sm">
        <h5 class="card-title">🧑‍🌾 การดูแลต้นไม้</h5>
        <p><strong>กิจกรรม:</strong> <?php echo htmlspecialchars($row_treecare['Activity']); ?></p>
        <p><strong>วันที่ดูแล:</strong> <?php echo htmlspecialchars($row_treecare['Care_date']); ?></p>
    </div>

    <div class="card p-4 shadow-sm text-center">
        <h5 class="card-title">🖼️ ภาพต้นไม้</h5>
        <img src="uploads/<?php echo htmlspecialchars($row['Image_url_past']); ?>" alt="Tree Image" class="tree-img mt-3">
    </div>
</div>
<a href="menu.php" class="menu-button"><div class="circle"></div>กลับสู่หน้าแรก</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

