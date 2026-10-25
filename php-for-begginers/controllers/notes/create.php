
<?php



$heading = 'Create Note';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $body = trim($_POST['body'] ?? '');

    if (!Validator::string($body, 1, 1000)) {

        if ($body === '') {
            $errors['body'] = 'A body is required';
        } else {
            $errors['body'] = 'The body can not be more than 1,000 characters.';
        }
    }

    if (empty($errors)) {

        $db->query(
            'INSERT INTO notes (body, user_id) VALUES (:body, :user_id)',
            [
                'body' => $body,
                'user_id' => 1
            ]
        );

        header('Location: /notes');
        exit();
    }
}

require 'views/notes/create.view.php';
