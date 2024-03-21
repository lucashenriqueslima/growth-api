<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Models\Locavibe\Renter;
use App\Services\Auth\GenerateAuthenticationToken;
use App\Services\Auth\SendAuthenticationToken;
use App\Traits\HttpResponses;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    use HttpResponses;
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        try {
            $renter = Renter::where('email', $request->email)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $this->errorResponse('Email não encontrado', 404);
        }

        $authToken = GenerateAuthenticationToken::run();

        SendAuthenticationToken::run($renter, $authToken);

        $renter->authToken = (string)$authToken;
        $renter->authTokenVerified = false;

        $renter->save();

        return $this->response();
    }
}
