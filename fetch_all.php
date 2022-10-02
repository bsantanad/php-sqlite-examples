<?php

$db = new SQLite3('test.db');

$r = $db->query('select * from cars') ;

while($row = $r->fetchArray()) {
    echo "{$row['id']} {$row['name']} {$row['price']}\n";
}

?>
