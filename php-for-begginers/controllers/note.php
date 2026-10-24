
<?php

$heading = 'Note';

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id'] ?? null
])->findOrFail();

$currentUserId = 1;

if ($note['user_id'] != $currentUserId) {
    abort(403);
}

require 'views/note.view.php';
