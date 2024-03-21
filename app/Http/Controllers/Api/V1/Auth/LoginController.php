<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Models\Locavibe\Renter;
use App\Traits\HttpResponses;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use HttpResponses;
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'authToken' => 'required',
        ]);

        
        try {
            $renter = Renter::where('email', $request->email)
                ->where('authToken', $request->authToken)
                ->where('authTokenVerified', false)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $this->errorResponse('Token inválido', 404);
        }
        
        Auth::guard('api')->loginUsingId($renter->id);

        $renter->authTokenVerified = true;
        $renter->authToken = null;
        $renter->apiToken = $renter->createToken('api')->plainTextToken;
        $renter->save();

        return $this->response(data: [
            Auth::guard('api')->user()
        ]);
    }
}
