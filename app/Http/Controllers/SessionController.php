<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login'); 
    }

    public function store()
    {
        // Steps!  
        // validate
        $validated = request()->validate ([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);  
        // attempt to log in the user
        if (! Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'Почта или пароль не совпадает'
            ]);
        }
    
        // regenerate session token
        request()->session()->regenerate();
        // redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
