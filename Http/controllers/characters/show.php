<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$user_id = $_SESSION['user']['id'];

$character = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($character['user_id'] === $user_id);

view("characters/show.view.php", [
    'heading' => 'Character',
    'character' => $character
]);
