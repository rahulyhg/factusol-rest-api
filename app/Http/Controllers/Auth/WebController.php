<?php

namespace App\Http\Controllers\Auth;

use App\Components\Controller;
use App\Http\Requests\LoginRequest;

class WebController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (\Auth::attempt($credentials, $request->input('remember'))) {
            return \Redirect::route('index');
        }
        else {
            return \Redirect::route('auth.login')->with('danger', __('auth.failed'))->withInput();
        }
    }

    public function getLogout()
    {
        \Auth::logout();
        return \Redirect::route('auth.login');
    }

}