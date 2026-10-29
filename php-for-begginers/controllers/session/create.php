
<?php

use Core\Session;

$heading = 'Login';
$errors = Session::get('errors', []);

require 'views/session/create.view.php';
