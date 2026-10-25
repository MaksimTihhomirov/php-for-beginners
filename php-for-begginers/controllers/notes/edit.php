
<?php

$heading = 'Edit Note';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

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

require 'views/notes/edit.view.php';
