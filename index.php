<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();
$res = $db->query('SELECT * FROM users', 'App\\Models\\User');
var_dump($res);