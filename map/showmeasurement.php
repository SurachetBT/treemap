<?php 
include('db_connect.php'); 

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ดึงข้อมูลจากฐานข้อมูล
$sql = "
SELECT 
    tm.measurement_id,            
    tm.tree_id,           
    tm.Height_m,
    tm.Tree_Cicumference_cm,
    tm.date_height,
    tm.date_circumference,
    t.tree_name
FROM 
    treemeasurement tm
JOIN 
    trees t ON tm.tree_id = t.tree_id
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
    <title>ประวัติการตรวจวัดต้นไม้</title>
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
            font-size: 28px;
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
            padding: 8px 15px; /* ลดขนาด padding */
            background-color:rgb(77, 14, 213); /* ชมพู */
            color: white;
            font-size: 14px; /* ขนาดตัวอักษร */
            font-weight: 600;
            border-radius: 25px; /* มุมโค้ง */
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 4px 12px rgba(255, 105, 180, 0.4);
            position: relative;
            overflow: hidden;
            display: block;
            width: fit-content;
            margin: 30px auto;
        }

        .menu-button .circle {
            width: 8px;
            height: 8px;
            background-color: white;
            border-radius: 50%;
            margin-right: 8px;
            animation: pulse 1.5s infinite;
        }

        .menu-button:hover {
            background-color:rgb(18, 46, 227);
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

<h2>ประวัติการตรวจวัดต้นไม้</h2>

<?php
// ตรวจสอบผลลัพธ์จาก query ว่ามีข้อมูลหรือไม่
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
        <th>ตำแหน่งต้นไม้</th>
        <th>ชื่อต้นไม้</th>
        <th>ความสูง (เมตร)</th>
        <th>เส้นรอบวง (ซม.)</th>
        <th>วันที่วัดความสูง</th>
        <th>วันที่วัดเส้นรอบวง</th>
      </tr>";

    // แสดงข้อมูลจากผลลัพธ์ที่ดึงมา
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["tree_id"]."</td>";  // tree_id
        echo "<td>".$row["tree_name"]."</td>"; // ชื่อต้นไม้
        echo "<td>".$row["Height_m"]."</td>";  // ความสูง (เมตร)
        echo "<td>".$row["Tree_Cicumference_cm"]."</td>";   //  เส้นรอบวง (ซม.)
        echo "<td>".$row["date_height"]."</td>"; // วันที่วัดความสูง
        echo "<td>".$row["date_circumference"]."</td>"; // วันที่วัดเส้นรอบวง
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align:center;'>ไม่มีข้อมูลประวัติการดูแลต้นไม้</p>";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>

<a href="menu.php" class="menu-button"><div class="circle"></div>กลับสู่หน้าแรก</a>

</body>
</html>
