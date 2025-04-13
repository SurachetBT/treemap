<?php
include("db_connect.php");

$term = isset($_GET['term']) ? $_GET['term'] : '';

$sql = "SELECT tree_id, tree_name FROM trees";

if (!empty($term)) {
    // ใช้ LIKE เพื่อให้ค้นหาได้ทั้งไทย/อังกฤษ
    $term = mysqli_real_escape_string($conn, $term);
    $sql .= " WHERE tree_name LIKE '%$term%'";
}

$result = mysqli_query($conn, $sql);

if (!$result) {
    die(json_encode(["error" => "Query failed: " . mysqli_error($conn)]));
}

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [
        "id" => $row['tree_id'],
        "text" => "{$row['tree_name']} [ตำแหน่ง: {$row['tree_id']}]"
    ];
}

header('Content-Type: application/json');
echo json_encode($data);
mysqli_close($conn);
?>
