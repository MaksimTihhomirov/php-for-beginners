
<?php

use Core\Session;

$heading = 'Login';

$errors = Session::get('errors', []);
$old = Session::get('old', []);

require 'views/session/create.view.php';
