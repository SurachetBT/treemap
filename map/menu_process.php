<?php
include('db_connect.php');
header('Content-Type: application/json; charset=utf-8');

$term = isset($_GET['term']) ? $_GET['term'] : '';

if ($term !== '') {
    // ป้องกัน SQL Injection และแยกคำ
    $terms = explode(' ', trim($term));
    $like_clauses = [];

    foreach ($terms as $word) {
        $word = mysqli_real_escape_string($conn, $word);
        $like_clauses[] = "tree_name LIKE '%$word%'";
    }

    $where_clause = implode(' AND ', $like_clauses);
    $query = "SELECT tree_name FROM trees WHERE $where_clause LIMIT 10";

    $result = mysqli_query($conn, $query);

    $suggestions = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $suggestions[] = $row['tree_name'];
    }

    echo json_encode($suggestions, JSON_UNESCAPED_UNICODE);
}
?>
