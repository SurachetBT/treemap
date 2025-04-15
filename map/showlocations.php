<?php 
include('db_connect.php'); 

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ดึงข้อมูลจากฐานข้อมูล
$sql = "
SELECT 
    l.Locations_id,            
    l.tree_id,           
    l.Latitude,
    l.Longitude,
    l.Soil_type,
    l.is_current,
    l.start_date,
    l.end_date,
    t.tree_name
FROM 
    locations l
JOIN 
    trees t ON l.tree_id = t.tree_id
";

$result = $conn->query($sql);

// ตรวจสอบว่า query สำเร็จหรือไม่
if (!$result) {
    die("ข้อผิดพลาดในการ query: " . $conn->error);  // แสดงข้อความข้อผิดพลาดจากฐานข้อมูล
}

?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ประวัติพื้นที่การปลุกต้นไม้</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf7ea; /* สีพื้นหลังเขียวอ่อน */
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #388e3c; /* สีเขียวเข้ม */
            margin-top: 50px;
            font-size: 30px;
            font-weight: bold;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #ffffff; /* สีพื้นหลังของตาราง */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* เงา */
        }

        th, td {
            border: 1px solid #c8e6c9; /* สีเขียวอ่อน */
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background-color: #c8e6c9; /* สีเขียวอ่อนสำหรับหัวตาราง */
            color: #388e3c;
        }

        tr:nth-child(even) {
            background-color: #f1f8e9; /* แถวคู่มีพื้นหลังสีอ่อน */
        }

        tr:hover {
            background-color: #a5d6a7; /* เมื่อชี้เมาส์แถวจะเปลี่ยนเป็นสีเขียวอ่อน */
        }

        .menu-button {
            display: inline-flex;
            align-items: center;
            padding: 12px 20px;
            background-color:rgb(49, 226, 9);
            color: white;
            font-size: 16px;
            font-weight: 600;
            border-radius: 30px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 4px 12px rgba(15, 223, 53, 0.4);
            position: relative;
            overflow: hidden;
            margin: 30px auto;
            display: table;
        }

        a.menu-button:hover {
            background-color: #66bb6a; /* เปลี่ยนสีเมื่อชี้เมาส์ */
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

<h2>ประวัติพื้นที่การปลุกต้นไม้</h2>

<?php
// ตรวจสอบผลลัพธ์จาก query ว่ามีข้อมูลหรือไม่
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
        <th>ตำแหน่งต้นไม้</th>
        <th>ชื่อต้นไม้</th>
        <th>ละติจูด(Latitude)</th>
        <th>ลองจิจูด(Longitude)</th>
        <th>ประเภทดิน</th>
        <th>ที่อยู่ปัจจุบัน</th>
        <th>วันที่เริ่มอยู่</th>
        <th>วันที่ย้ายออก</th>
      </tr>";

    // แสดงข้อมูลจากผลลัพธ์ที่ดึงมา
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["tree_id"]."</td>";  // tree_id
        echo "<td>".$row["tree_name"]."</td>"; // ชื่อต้นไม้
        echo "<td>".$row["Latitude"]."</td>";  // ละติจูด(Latitude)
        echo "<td>".$row["Longitude"]."</td>";   //ลองจิจูด(Longitude)
        echo "<td>".$row["Soil_type"]."</td>"; // ประเภทดิน
        echo "<td>".$row["is_current"]."</td>"; // ที่อยู่ปัจจุบัน
        echo "<td>".$row["start_date"]."</td>"; // วันที่เริ่มอยู่
        echo "<td>".$row["end_date"]."</td>"; // วันที่ย้ายออก
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align:center;'>ไม่มีข้อมูลประวัติการดูแลต้นไม้</p>";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
<a href="menu.php" class="menu-button pink"><div class="circle"></div>กลับสู่หน้าแรก</a>
</body>
</html>
