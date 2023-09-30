<?php
use Core\App;
use Core\Database;
use Core\Validator;
use Core\Authenticator;

$db = App::resolve(Database::class);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs.
$errors = [];

if (!Validator::string($username)) {
    $errors['username'] = 'Please provide a username';
}

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven characters';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

// check if the account already exist
$user = $db->query('select * from account where name = :username or email_address =:email', [
    'username' => $username,
    'email' => $email
])->find();


if ($user) {
    // then someone with that email already exists and has an account
    // if yes, redirect to login page
    header('location: /login');
    exit();
} else {
    // if not , save on to the database and login and redirect.
    $db->query('INSERT INTO account(name, passwd, email_address) VALUES(:username, :password, :email)', [
        'username' => $username,
        'password' => hash('sha512', $password),
        'email' => $email
    ]);

    $user = $db->query('select * from account where name = :username AND email_address =:email', [
        'username' => $username,
        'email' => $email
    ])->find();

    (new Authenticator)->login($user);

    header('location: /');
    exit();
}

