<?php
include('db_connect.php');

$term = isset($_GET['term']) ? $_GET['term'] : '';

if ($term != '') {
    $term = mysqli_real_escape_string($conn, $term);
    $query = "SELECT tree_name FROM trees WHERE tree_name LIKE '%$term%' LIMIT 10";
    $result = mysqli_query($conn, $query);

    $suggestions = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $suggestions[] = $row['tree_name'];
    }

    echo json_encode($suggestions);
}
?>
