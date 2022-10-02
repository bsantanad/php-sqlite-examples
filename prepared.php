<?php

$db = new SQLite3('test.db');

/*
 * With bindValue we bind value 3 to the question mark placeholder. The first
 * argument is the positional parameter, identifying the placeholder (there
 * can be multiple question mark placeholders).
 */
$stm = $db->prepare('select * from cars where id = ?');
$stm->bindValue(1, 3, SQLITE3_INTEGER);


$r = $stm->execute();

$row = $r->fetchArray(SQLITE3_NUM);

echo "{$row[0]} {$row[1]} {$row[2]}";

?>
