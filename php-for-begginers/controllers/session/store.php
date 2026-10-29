
<?php

use Core\Authenticator;
use Core\Http\Forms\LoginForm;

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$form = new LoginForm();

if (!$form->validate($email, $password)) {
    $errors = $form->errors();
    $heading = 'Login';

    require 'views/session/create.view.php';
    return;
}

$auth = new Authenticator();

if (!$auth->attempt($email, $password)) {
    $errors = ['login' => 'Invalid email or password.'];
    $heading = 'Login';

    require 'views/session/create.view.php';
    return;
}

header('Location: /');
exit;
