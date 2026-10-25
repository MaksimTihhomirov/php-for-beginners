
<?php

use Core\Validator;

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$body = trim($_POST['body'] ?? '');

if (!$id) {
    http_response_code(404);
    exit('Note not found');
}

$note = $db->query(
    'SELECT * FROM notes WHERE id = :id',
    ['id' => $id]
)->find();

if (!$note) {
    http_response_code(404);
    exit('Note not found');
}

$errors = [];

if (!Validator::string($body, 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

if (!empty($errors)) {
    $heading = 'Edit Note';
    require 'views/notes/edit.view.php';
    return;
}

$db->query(
    'UPDATE notes SET body = :body WHERE id = :id',
    [
        'body' => $body,
        'id' => $id
    ]
);

header('Location: /note?id=' . $id);
exit();
