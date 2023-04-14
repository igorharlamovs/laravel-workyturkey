<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {

        //You can search for Laravel validation to find all the available rules to use.
        $attributes = request()->validate([
            'name'     => ['required', 'max:40'],
            'username' => ['required', 'min:3', Rule::unique('users','username')],
            'email'    => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:7']
        ]);

       $user = User::create($attributes);

        // log theu user in
        Auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created');
    }
}
