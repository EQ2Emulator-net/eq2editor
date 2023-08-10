<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$user_id = $_SESSION['user']['id'];

$characters = $db->query('select * from notes where user_id = :user_id', [
    'user_id' => $user_id
])->get();

view("characters/index.view.php", [
    'heading' => 'Characters',
    'characters' => $characters
]);