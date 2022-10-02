<?php

$db = new SQLite3('test.db');

$r = $db->query('select * from cars where id = 1');

$cols = $r->numColumns();

echo "there are {$cols} columns in the result set\n";

$r = $db->query('pragma table_info(cars)');

echo "\npragma table info\n";
while($row = $r->fetchArray(SQLITE3_NUM)) {
    echo "{$row[0]} {$row[1]} {$row[2]} \n";
}

?>
