<?php
session_start();
include('db_connect.php'); // เชื่อมต่อฐานข้อมูล

// ตรวจสอบว่ามีการล็อกอินหรือไม่ หากไม่ได้ล็อกอินให้เปลี่ยนเส้นทางไปยังหน้า login
if(!isset($_SESSION['u_email'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['u_email'];

// ดึงข้อมูลโปรไฟล์จากฐานข้อมูล
$sql = "SELECT * FROM profile WHERE u_email='$username'";
$result = mysqli_query($conn, $sql);

// ตรวจสอบว่ามีข้อมูลโปรไฟล์หรือไม่
if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    // หากไม่มีโปรไฟล์ ให้เปลี่ยนเส้นทางไปยังหน้า profile.php
    header('Location: profile.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- เรียกใช้ CSS ของ Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Profile</h2>
                    <form action="profile.php" method="post">
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $row['p_frname']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $row['p_lname']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['p_add']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $row['p_tel']; ?>" readonly>
                        </div>
                        <!-- เพิ่มปุ่ม "Update Profile" เพื่อเปลี่ยนเส้นทางไปยังหน้า update_profile.php -->
                        <a href="update.php" class="btn btn-primary">Update Profile</a>
                        <a href="profile.php" class="btn btn-primary">Create Profile</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- เรียกใช้ JavaScript ของ Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>