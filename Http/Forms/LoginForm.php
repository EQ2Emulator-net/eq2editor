<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function validate($usernameOrEmail, $password)
    {
        if (!Validator::usernameOrEmail($usernameOrEmail)) {
            $this->errors['email'] = 'Please provide a valid username or email address.';
        }

        if (!Validator::string($password)) {
            $this->errors['password'] = 'Please provide a valid password.';
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;
    }
}