
<?php

$heading = 'My Notes';

$notes = $db->query(
    'SELECT * FROM notes
     WHERE user_id = :user_id
     ORDER BY id DESC',
    [
        'user_id' => 1
    ]
)->get();

require 'views/notes.view.php';
