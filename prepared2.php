<?php

$db = new SQLite3('test.db');

$stm = $db->prepare('select * from cars where id = :id');
$stm->bindValue(':id', 1, SQLITE3_INTEGER);


$r = $stm->execute();

$row = $r->fetchArray(SQLITE3_NUM);

echo "{$row[0]} {$row[1]} {$row[2]}";

?>
