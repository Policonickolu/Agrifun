<?php

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'agrifun',
    'user'     => 'root',
    'password' => '',
);

$app['token'] = '123456789';