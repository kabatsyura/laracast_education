<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegistredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // Шаги
        // валидация
        // создание
        // log in
        // redirect на другую страницу

        $validated = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'], // если ставим 'confirmed' это означает
            // что данные паролья должны совпадать со значеннием 'password_confirmation', и тогда
            // мы должны во view иметь поле с name and id with password_confirmation
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect('/jobs');   
    }
}
