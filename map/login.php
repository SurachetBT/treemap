<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- เรียกใช้ CSS ของ Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Login</h2>
                    <?php
                    session_start();
                    if (isset($_SESSION['errors'])) {
                        foreach ($_SESSION['errors'] as $error) {
                            echo '<div class="alert alert-danger">' . $error . '</div>';
                        }
                        unset($_SESSION['errors']); // ลบข้อผิดพลาดหลังจากแสดง
                    }
                    ?>
                    <form action="login_process.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Email:</label>
                            <input type="text" id="username" name="u_email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" id="password" name="u_pass" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <p class="mt-3">Don't have an account? <a href="register.php">Register here</a>.</p>
                </div>
            </div>
        </div>