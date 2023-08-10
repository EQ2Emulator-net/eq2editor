<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$user_id = $_SESSION['user']['id'];

$notes = $db->query('select * from notes where user_id = :user_id', [
    'user_id' => $user_id
])->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);