<?php

$db = new SQLite3('test.db');

$db->exec("CREATE TABLE cars(id INTEGER PRIMARY KEY, name TEXT, price INT)");

$db->exec("INSERT INTO cars(name, price) VALUES('Audi', 52642)");
$db->exec("INSERT INTO cars(name, price) VALUES('Mercedes', 57127)");
$db->exec("INSERT INTO cars(name, price) VALUES('Skoda', 9000)");
$db->exec("INSERT INTO cars(name, price) VALUES('Volvo', 29000)");
$db->exec("INSERT INTO cars(name, price) VALUES('Bently', 35000)");
$db->exec("INSERT INTO cars(name, price) VALUES('Citroen', 21000)");
$db->exec("INSERT INTO cars(name, price) VALUES('Humer', 41400)");
$db->exec("INSERT INTO cars(name, price) VALUES('Volkswagen', 21600)");

$last_row_id = $db->lastInsertRowID();

echo $last_row_id;

?>
