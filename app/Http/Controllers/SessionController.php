<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\Rules\Exists;

class SessionController extends Controller
{
    public function login(LoginRequest $loginRequest)
    {
        $validated = $loginRequest->validated();

        if (auth()->attempt($validated)) {
            return redirect('home');
        } else {
            return redirect('/');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }
}
