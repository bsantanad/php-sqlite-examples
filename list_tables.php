<?php

$db = new SQLite3('test.db');

$r = $db->query("select name from sqlite_master where type='table'");

$changes = $db->changes();
echo $changes; //number of database rows that were modified inserted or deleted

while($row = $r->fetchArray(SQLITE3_NUM)) {
    echo "{$row[0]}\n";
}

?>
