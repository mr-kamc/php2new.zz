<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();
$user = \App\Models\User::findById('4');

var_dump($users);
var_dump($user);