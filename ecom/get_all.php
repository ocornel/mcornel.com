<?php
include('../angular/php/db_connect.php');
$table = $_GET['table'];
$statement = $connection->prepare("select * from  $table");                                                    # prepare the connection to receive 4 values
//$statement->bind_param('s', $_GET['table']);
$statement->execute();
$result = $statement->get_result();
$rows = [];
while ($row=$result->fetch_assoc()) {
    array_push($rows, $row);
}
echo(json_encode($rows));