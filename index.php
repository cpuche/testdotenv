<?php

use Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

echo '<pre>';
print_r($_ENV['HOLA_MUNDO']);
echo '</pre>';
exit;
