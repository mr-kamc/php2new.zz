<?php

require __DIR__ . '/../autoload.php';

$test = new \App\Db();

$result1 = $test->query('SELECT * FROM users WHERE id = :id', \App\Models\User::class, [':id' => 1]);

$result2 = $test->execute('SELECT * FROM users WHERE id = :id', [':id' => 2]);


if ($result1){
    echo 'метод query: <b>пройден</b> тест №1 с подстановкой параметров </br>';
} else {
    echo 'метод query: тест №1 с подстановкой параметров не пройден </br>';
}

if ($result2){
    echo 'метод execute: <b>пройден</b> тест №2 с подстановкой параметров </br>';
} else {
    echo 'метод execute: тест №2 с подстановкой параметров не пройден </br>';
}
