<?php

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