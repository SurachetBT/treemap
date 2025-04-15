<?php
session_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ไม่มีสิทธิ์เข้าถึง</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
            color: #721c24;
            text-align: center;
            padding: 50px;
        }
        .container {
            background-color: #f5c6cb;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
        }
        a {
            color: #721c24;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>คุณไม่มีสิทธิ์เข้าถึงหน้านี้</h1>
        <p>กรุณาติดต่อผู้ดูแลระบบหากคุณคิดว่ามีข้อผิดพลาด</p>
        <p><a href="menu.php">กลับสู่หน้าแรก</a></p>
    </div>
</body>
</html>
