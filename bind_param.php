<?php

$db = new SQLite3('test.db');

$db->exec("create table friends(id INTEGER PRIMARY KEY, firstname TEXT, lastname TEXT)");

$stm = $db->prepare('insert into friends(firstname, lastname) values(?, ?)');
$stm->bindParam(1, $first_name);
$stm->bindParam(2, $last_name);

$first_name = 'peter';
$last_name = 'novak';
$stm->execute();

$first_name = 'lucy';
$last_name = 'brown';
$stm->execute();

$r = $db->query('select * from friends');

while($row = $r->fetchArray(SQLITE3_NUM)){
    echo "{$row[0]} {$row[1]} {$row[2]} \n";
}

?>
