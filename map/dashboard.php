<!-- dashboard.php -->
<?php
session_start();
if (!isset($_SESSION['u_email'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['u_email']; ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>