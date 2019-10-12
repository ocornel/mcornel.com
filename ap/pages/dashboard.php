<?php
include('page-db-connection.php');
$tool_groups = $connection->query("SELECT * FROM tools_groups ORDER BY tools_count DESC ");
$groups = [];
while ($row = mysqli_fetch_assoc($tool_groups)) {
    $groups[] = $row;
}

echo json_encode($groups);