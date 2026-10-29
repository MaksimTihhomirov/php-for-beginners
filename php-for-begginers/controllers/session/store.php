
<?php

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

$user = $db->query(
    "SELECT * FROM users WHERE email = :email",
    ['email' => $email]
)->find();

if (!$user || !password_verify($password, $user['password'] ?? '')) {
    $errors = ['login' => 'Invalid email or password.'];
    $heading = 'Login';

    require 'views/session/create.view.php';
    return;
}

session_regenerate_id(true);

$_SESSION['user'] = [
    'id' => $user['id'],
    'email' => $user['email']
];

header('Location: /');
exit;
