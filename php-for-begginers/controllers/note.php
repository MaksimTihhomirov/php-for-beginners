
<?php

$config = require 'config.php';

$db = new Database($config['database']);

$heading = 'Note';

$id = $_GET['id'] ?? null;

if (!$id) {
    abort(404);
}

$note = $db->query(
    'SELECT * FROM notes WHERE id = :id',
    ['id' => $id]
)->fetch();

if (!$note) {
    abort(404);
}

require 'views/note.view.php';
