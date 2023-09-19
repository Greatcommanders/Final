<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'ethics',
    'username' => 'root',
    'password' => '',
    'port'=>3306
]);


$capsule->bootEloquent();