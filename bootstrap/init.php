<?php

define('BASEPATH', __DIR__ . '/../');

include BASEPATH . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();

include __DIR__ . '/../helpers/helper.php';

$request = new \App\Core\Request();

include __DIR__ . '/../routes/web.php';
