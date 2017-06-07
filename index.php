<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/lib/functions.php';

getPart('header');
getPart('menu');
getContent();
getPart('footer');


?>

