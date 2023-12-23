<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('login', 'DefaultController');
Routing::get('home', 'DefaultController');
Routing::get('licytacje', 'DefaultController');
Routing::get('licytacje_archiwalne', 'DefaultController');
Routing::get('moje_licytacje', 'DefaultController');


Routing::run($path);