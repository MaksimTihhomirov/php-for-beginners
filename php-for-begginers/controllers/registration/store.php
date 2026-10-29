
<?php

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$errors = [];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}

if (strlen($password) < 8) {
    $errors['password'] = 'Password must be at least 8 characters.';
}

if (!$errors) {
    $existingUser = $db->query(
        'SELECT id FROM users WHERE email = :email',
        ['email' => $email]
    )->find();

    if ($existingUser) {
        $errors['email'] = 'This email is already registered.';
    }
}

if ($errors) {
    $heading = 'Register';
    require 'views/registration/create.view.php';
    return;
}

$db->query(
    'INSERT INTO users (username, admin, email, password)
     VALUES (:username, :admin, :email, :password)',
    [
        'username' => $email,
        'admin' => 0,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]
);

header('Location: /register');
exit;
