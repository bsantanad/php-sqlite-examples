<?php

$pdo = new PDO('sqlite:test.db');

$stm = $pdo->query('select * from cars');
$rows = $stm->fetchAll(PDO::FETCH_NUM);

foreach($rows as $row) {
    echo "{$row[0]} {$row[1]} {$row[2]}\n";
}

?>
