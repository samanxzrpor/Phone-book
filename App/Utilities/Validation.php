<?php
namespace App\Utilities;

class Validation
{

    public static function isStrongPassword(string $pass)
    {
        if (strlen($pass) < 8)
            return false;
        if (!preg_match('/[A-Za-z1-9]/' , $pass))
            return false;
        if (!preg_match('/\d/' , $pass))
            return false;

        return true;
    }

}