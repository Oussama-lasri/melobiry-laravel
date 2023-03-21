<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Bande;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;

class UsersController extends Controller
{
    public function register()
    {

        return view('Users.register');
    }


    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required',
        ]);
        //hash password
        $formFields['password'] = bcrypt($formFields['password']);
        // create User
        $user = Users::create($formFields);

        // Login

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }
    public function login()
    {
        return view('Users.login');
    }
    public function authentificate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are authentificate');
        }

        return back()->withErrors(['email' => 'invalid credentials'])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out!');
    }

    public function beAdmin($id)
    {
        $user = Users::findOrFail($id);
        // dd(Users::all()->where('id',));
        if ($user->role == '0') {
            $user->update([
                'role' => '1'
            ]);
            return back()->with('message', 'User has been made an admin');
        } else {
            return back()->with('message', 'User role cannot be changed');
        }
    }
    public function removeAdmin($id)
    {
       
        $user = Users::findOrFail($id);
        if ($user->role == '1') {
            $user->update([
                'role' => '0'
            ]);
            return back()->with('message', 'role admin removed');
        }else {
            return back()->with('message', 'admin role cannot be changed');
        }
    }

}
