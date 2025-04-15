<?php 
include('db_connect.php'); 

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ดึงข้อมูลจากฐานข้อมูล
$sql = "
SELECT 
    tc.Care_id,            
    tc.tree_id,           
    tc.Activity,
    tc.remarks,
    tc.Care_date,
    t.tree_name
FROM 
    treecare tc
JOIN 
    trees t ON tc.tree_id = t.tree_id
";

$result = $conn->query($sql);

// ตรวจสอบว่า query สำเร็จหรือไม่
if (!$result) {
    die("ข้อผิดพลาดในการ query: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ประวัติการดูแลต้นไม้</title>
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #fff0f5;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #cc3366;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #ffe6f0;
            color: #cc3366;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #fdf1f5;
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

        .menu-button:hover {
            background-color: #ff85c1;
            transform: scale(1.05);
        }

        .menu-button:active {
            transform: scale(0.98);
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.4); opacity: 0.6; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>

<h2>ประวัติการดูแลต้นไม้</h2>

<?php
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>รหัสต้นไม้</th>
            <th>ชื่อต้นไม้</th>
            <th>กิจกรรม</th>
            <th>หมายเหตุ</th>
            <th>วันที่ดูแล</th>
          </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["tree_id"]."</td>";
        echo "<td>".$row["tree_name"]."</td>";
        echo "<td>".$row["Activity"]."</td>";
        echo "<td>".$row["remarks"]."</td>";
        echo "<td>".$row["Care_date"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align:center;'>ไม่มีข้อมูลประวัติการดูแลต้นไม้</p>";
}

$conn->close();
?>

<a href="menu.php" class="menu-button pink">
    <div class="circle"></div>
    <span>กลับสู่หน้าแรก</span>
</a>

</body>
</html>
