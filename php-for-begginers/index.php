
<?php

require 'functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);

    require __DIR__ . "/" . lcfirst($class) . ".php";
});

$config = require 'config.php';

$db = new Core\Database($config['database']);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/notes' => 'controllers/notes/index.php',
    '/note' => 'controllers/notes/show.php',
    '/notes/create' => 'controllers/notes/create.php'
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    require 'views/404.php';
}
