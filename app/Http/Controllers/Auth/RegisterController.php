<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('pages.contact');
    }

    public function register(Request $request)
    {
        $registerUserData = $request->validate
        ([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required'
        ]);

        $user = User::create
        ([
            'first_name' => $registerUserData['first_name'],
            'last_name' => $registerUserData['last_name'],
            'email' => $registerUserData['email'],
            'password' => Hash::make($registerUserData['password']),
        ]);

        // if(!$user) {
        //     return redirect(route('registration'))->with("error", "Registration failed, try again.");
        // }
        return redirect(route('home'))->with("success", "Registration success, login to access the application");      
    
    }
}
