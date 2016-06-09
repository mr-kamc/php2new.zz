<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();
$user = \App\Models\User::findById('2');
$news = \App\Models\News::findLastRecord(3);

include __DIR__ . '/Views/news.php';