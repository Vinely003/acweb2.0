<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request, User $users, RegisterRequest $registreRequest)
    {
        $validated = $registreRequest->validated();

        if ($validated) {
            $email = $request->input('email');
            $emailTag = explode('@', $email);
            $password = $request->input('password');

            $newUser = User::create([
                'name' => $emailTag[0],
                'email' => $email,
                'password' => bcrypt($password)
            ]);

            auth()->login($newUser);

            return redirect('home');
        }
    }
}
