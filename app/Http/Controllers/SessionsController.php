<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create () {
        return view('sessions.create');
    }

    public function store () {
        /**
         * validate the request
         * 
         * attempt to authenticate and login the user
         * based on the provided credentials
         * 
         * redirect with a success flash message
         * 
         * if auth failed, display custom validation message
         * return back error message
         */
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/') -> with('success', 'Welcome Back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);

    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
