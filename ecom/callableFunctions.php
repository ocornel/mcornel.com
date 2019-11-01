<?php

function getOne($table=null, $id=null) {
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare("select * from  $table where id=?");                                                    # prepare the connection to receive 4 values
    $statement->bind_param('i', $id);
    $statement->execute();
    return $statement->get_result()->fetch_assoc();
}


function getAll($table=null) {
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare("select * from  $table");                                                    # prepare the connection to receive 4 values
    $statement->execute();
    $result = $statement->get_result();
    $rows = [];
    while ($row=$result->fetch_assoc()) {
        array_push($rows, $row);
    }
    return($rows);
}

function CategoryProducts($category_id)
{
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare("select * from  products where category_id=$category_id");                                                    # prepare the connection to receive 4 values
    $statement->execute();
    $result = $statement->get_result();
    $rows = [];
    while ($row = $result->fetch_assoc()) {
        array_push($rows, $row);
    }
    return ($rows);
}

function generateRef($len=5, $case="m") {
    $string = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($len / strlen($x)))), 1, $len);
    switch ($case) {
        case "l": return strtolower($string);
        case "u": return strtoupper($string);
        default: return $string;
    }
}

