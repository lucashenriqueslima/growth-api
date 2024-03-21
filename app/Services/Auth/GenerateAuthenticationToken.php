<?php

namespace App\Services\Auth;

class GenerateAuthenticationToken
{
    public static function run()
    {
        return rand(100000, 999999);
    }
}