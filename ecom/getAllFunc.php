<?php
function getAll($table=null) {
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare("select * from  $table");                                                    # prepare the connection to receive 4 values
    $statement->execute();
    $result = $statement->get_result();
    $rows = [];
    while ($row=$result->fetch_assoc()) {
        array_push($rows, $row);
    }
    return(json_encode($rows));
}