<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DemoUser;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('userid', 'password');

        // Retrieve user by username
        $user = DemoUser::where('userid', $credentials['userid'])->first();

        // Check if user exists and passwords match
        if ($user && $user->password === $credentials['password']) {
            // Authentication passed
            Auth::login($user);
            return redirect()->route('dashboard');
        }

        // Authentication failed
        return redirect('/welcome')->with('error', 'Invalid credentials');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect("/");
    }
   

}
