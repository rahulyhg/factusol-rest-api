<?php

namespace App\Http\Controllers\Auth;

use App\Components\Controller;

class ApiController extends Controller
{
    public function postToken()
    {
        $result = [
            "Access-Token" => "###",
            "token_type" => "Bearer",
            "expires_in" => 86400,
        ];

        return response()->json($result);
    }
}