
<?php

use Core\App;
use Core\Container;
use Core\Database;
use Core\Router;

require 'functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);

    require __DIR__ . "/{$class}.php";
});

$container = new Container();

$container->bind('Core\Database', function () {
    $config = require 'config.php';

    return new Database($config['database']);
});

App::setContainer($container);

$db = App::resolve('Core\Database');

$router = new Router();

require 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->route($uri, $_SERVER['REQUEST_METHOD'], $db);
