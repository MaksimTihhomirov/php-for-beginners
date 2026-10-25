
<?php

require 'functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);

    require __DIR__ . "/{$class}.php";
});

$config = require 'config.php';

$db = new Core\Database($config['database']);

$router = new Core\Router();

require 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->route($uri, $_SERVER['REQUEST_METHOD'], $db);
