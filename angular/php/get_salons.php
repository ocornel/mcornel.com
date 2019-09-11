<?php include("db_connect.php");
$query_result = $connection->query("SELECT * FROM salons");
$rows = [];
while ($row = mysqli_fetch_assoc($query_result)) {
    $rows[] = $row;
}
echo json_encode($rows);