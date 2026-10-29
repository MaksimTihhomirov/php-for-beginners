
<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');

$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes/create', 'controllers/notes/store.php');

$router->post('/note', 'controllers/notes/destroy.php');

$router->get('/notes/edit', 'controllers/notes/edit.php');
$router->patch('/notes/edit', 'controllers/notes/update.php');

$router->get('/register', 'controllers/registration/create.php');
$router->post('/register', 'controllers/registration/store.php');

$router->get('/login', 'controllers/session/create.php');
$router->post('/login', 'controllers/session/store.php');
$router->post('/logout', 'controllers/session/destroy.php');
