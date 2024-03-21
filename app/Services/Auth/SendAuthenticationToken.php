<?php

namespace App\Services\Auth;

use App\Models\Locavibe\Renter;
use App\Notifications\AuthenticationTokenNotification;

class SendAuthenticationToken
{
    public static function run(Renter $renter, string $token)
    {

        $renter->notify(new AuthenticationTokenNotification($token));
    }


}