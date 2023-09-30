<?php

namespace Core;

class Authenticator
{
    public function attempt($usernameOrEmail, $password)
    {
        // Check if the input is an email or a username
        $column = filter_var($usernameOrEmail, FILTER_VALIDATE_EMAIL) ? 'email_address' : 'name';

        $user = App::resolve(Database::class)
            ->query("select * from account where $column = :value", [
            'value' => $usernameOrEmail
        ])->find();

        if ($user) {
            if (hash('sha512', $password) === $user['passwd']) {
                $this->login($user);

                return true;
            }
        }

        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['name'], // username
            'email' => $user['email_address']
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}