<?php
include('page-db-connection.php');
$tool_groups = $connection->query("SELECT * FROM tools_groups ORDER BY tools_count DESC ");
$groups = [];
while ($row = mysqli_fetch_assoc($tool_groups)) {
    $groups[] = $row;
}

$start = "
<table class='table-striped '>
<thead>
<tr>
<td>ID</td>
<td>NAME</td>
<td>TOOLS</td>
<td>DISPLAY</td>
<td>OPTIONS</td>
</tr>
</thead>
<tbody>";
$rows = "";
foreach ($groups as $group) {
    $group_id = $group['id'];
    $group_name = $group['name'];
    $group_tool_count = $group['tools_count'];
    $group_display = $group['display'];
    $rows .= "<tr>
<td>$group_id</td>
<td>$group_name</td>
<td>$group_tool_count</td>
<td>$group_display</td>
<td>Edit add tool delete</td>
</tr>";
}

$finish = "</tbody></table>";
$result = $start . $rows . $finish;
echo $result;