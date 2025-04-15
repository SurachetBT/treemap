<?php
function requireRole($allowedRoles = []) {
    session_start();
    if (!isset($_SESSION['role_id']) || !in_array($_SESSION['role_id'], $allowedRoles)) {
        header("Location: no_permission.php");
        exit();
    }
}