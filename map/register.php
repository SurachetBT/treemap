<!-- register.php -->
<?php 
include('db_connect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- เรียกใช้ CSS ของ Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Register</h2>
                    <form action="register_process.php" method="POST">
                        <div class="mb-3">
                            <label for="u_name" class="form-label">Username:</label>
                            <input type="text" id="u_name" name="u_name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="u_name" class="form-label">lastname:</label>
                            <input type="text" id="u_lastname" name="u_lastname" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="u_name" class="form-label">phone number:</label>
                            <input type="text" id="U_phone" name="U_phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="u_email" class="form-label">Email:</label>
                            <input type="email" id="u_email" name="u_email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="u_pass" class="form-label">Password:</label>
                            <input type="password" id="u_pass" name="u_pass" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password:</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Register</button>
                    </form>
                    <p class="mt-3">Already have an account? <a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- เรียกใช้ JavaScript ของ Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>