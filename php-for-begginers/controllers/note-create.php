
<?php

$heading = 'Create Note';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = trim($_POST['body'] ?? '');

    if ($body === '') {
        $error = 'Please enter a note.';
    } else {
        $db->query(
            'INSERT INTO notes (body, user_id)
             VALUES (:body, :user_id)',
            [
                'body' => $body,
                'user_id' => 1
            ]
        );

        header('Location: /notes');
        exit();
    }
}

require 'views/note-create.view.php';
