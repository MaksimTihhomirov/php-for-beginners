
<?php

$_SESSION = [];

session_regenerate_id(true);

header('Location: /login');
exit;
