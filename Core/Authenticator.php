<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)
            ->query('select * from account where email_address = :email', [
            'email' => $email
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