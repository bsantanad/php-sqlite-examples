<?php

$db = new SQLite3('test.db');

$sql = "select name from cars where name = 'Audi'";

$escaped = SQLite3::escapeString($sql);

var_dump($sql);
var_dump($escaped);

?>
