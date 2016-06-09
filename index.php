<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();
$user = \App\Models\User::findById('2');
$news = \App\Models\News::findLastRecord(2);

var_dump($users);
var_dump($user);
var_dump($news);