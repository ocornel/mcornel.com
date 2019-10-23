<?php
function getOne($table=null, $id=null) {
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare("select * from  $table where id=?");                                                    # prepare the connection to receive 4 values
    $statement->bind_param('i', $id);
    $statement->execute();
    return $statement->get_result()->fetch_assoc();
}