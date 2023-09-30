<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$usernameOrEmail = $_POST['username_email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($usernameOrEmail, $password)) {
    if ((new Authenticator)->attempt($usernameOrEmail, $password)) {
        redirect('/');
    }

    $form->error('username_email', 'No matching account found for that username or email address and password.');
}

Session::flash('errors', $form->errors());
Session::flash('old', [
    'username_email' => $_POST['username_email']
]);

return redirect('/login');