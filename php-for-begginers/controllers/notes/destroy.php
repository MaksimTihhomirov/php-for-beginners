
<?php

$id = $_POST['id'] ?? null;

if ($id) {
    $db->query(
        'DELETE FROM notes WHERE id = :id AND user_id = :user_id',
        [
            'id' => $id,
            'user_id' => 1
        ]
    );
}

header('Location: /notes');
exit();
