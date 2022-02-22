<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegistrationUserRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogIn()
    {
        return view('auth.login');
    }

    public function showLogOut()
    {
        auth("web")->logout();
        return redirect(route("login"));
    }

    public function showRegistration()
    {
        return view('auth.register');
    }

        public function registration(RegistrationUserRequest $request)
    {

        $user = User::create([
            "username" => $request->get('username'),
            "email" => $request->get('email'),
            "password" => bcrypt( $request->get('password'))
        ]);
        if ($user) {
            auth("web")->login($user);
        }
        return redirect(route("main"));
    }

     public function logIn(LoginUserRequest $request)
    {
        $data = [$request->get('username'),$request->get('password')];

        if (auth("web")->attempt($data)) {
            return redirect(route("main"));
        }

        return redirect(route("login"))->withErrors(["email" => "User not find, or ..."]);
    }
}
