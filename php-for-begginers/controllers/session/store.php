
<?php

use Core\Authenticator;
use Core\Http\Forms\LoginForm;
use Core\Session;

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$form = new LoginForm();

if (!$form->validate($email, $password)) {
    Session::flash('errors', $form->errors());

    header('Location: /login');
    exit;
}

$auth = new Authenticator();

if (!$auth->attempt($email, $password)) {
    Session::flash('errors', [
        'login' => 'Invalid email or password.'
    ]);

    header('Location: /login');
    exit;
}

header('Location: /');
exit;
