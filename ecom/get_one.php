<?php
include('../angular/php/db_connect.php');
$table = $_GET['table'];
$statement = $connection->prepare("select * from  $table where id=?");                                                    # prepare the connection to receive 4 values
$statement->bind_param('i', $_GET['id']);
$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();
echo(json_encode($row));