<?php

namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    //public static function email($value)
    //{
    //    return filter_var($value, FILTER_VALIDATE_EMAIL);
    //}

    public static function usernameOrEmail($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) || self::isValidUsername($value);
    }

    private static function isValidUsername($value)
    {
        // Use a regular expression to check if the username only contains letters, numbers, and underscores
        return preg_match('/^[a-zA-Z0-9_]+$/', $value);
    }
}
