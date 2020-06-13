<?php

use Muyu\Config;

define('ROOT', __DIR__ . '/../');

require ROOT . 'vendor/autoload.php';

app_loader();

Config::setPath(ROOT . 'config.json');

db('default', genConn('sqlite', ['db' => ROOT . conf('database.sqlite.db')]));

mvc_on();