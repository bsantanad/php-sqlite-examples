<?php

$db = new SQLite3('test.db');

$r = $db->query('select * from cars');

$col1 = $r->columnName(1); // name
$col2 = $r->columnName(2); // price

$header = sprintf("%-10s %s\n", $col1, $col2);
echo $header;

while($row = $r->fetchArray()) {
    $line = sprintf("%-10s %s\n", $row[1], $row[2]);
    echo $line;
}

?>
