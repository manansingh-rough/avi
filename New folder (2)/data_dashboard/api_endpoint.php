<?php
header('Content-Type: application/json');
require 'db_connection.php';

$whereClauses = [];
if (isset($_GET['year']) && $_GET['year'] !== '') {
    $year = $conn->real_escape_string($_GET['year']);
    $whereClauses[] = "year = '$year'";
}
if (isset($_GET['topics']) && $_GET['topics'] !== '') {
    $topics = $conn->real_escape_string($_GET['topics']);
    $whereClauses[] = "topics = '$topics'";
}
// Add other filters similarly

$whereSql = "";
if (count($whereClauses) > 0) {
    $whereSql = "WHERE " . implode(" AND ", $whereClauses);
}

$sql = "SELECT * FROM data $whereSql";
$result = $conn->query($sql);

$data = array();
while($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
