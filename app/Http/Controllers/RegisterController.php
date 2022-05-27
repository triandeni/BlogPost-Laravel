<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
      return view('register.index', [
          'title' => 'Register',
          'active' => 'register'
      ]);
    }

    public function store( Request $request)
    {
      $validatedData = $request->validate([
       'name' => 'required|min:4|max:30',
       'username' => ['required','min:5','max:30','unique:users'],
        // 'phone' => 'min:15|max:20',
        // 'address' => 'min:10|max:30',
        // 'birth' => '',
       'email' => 'required|email:dns|unique:users',
       'password' => 'required|min:8|max:30'
      ]);

      $validatedData['password'] = bcrypt($validatedData['password']);

      User::create($validatedData);

      $request->session()->flash('success', 'Registration Success! Please Login');
      return redirect('/login')->with('success', 'Registration Success! Please Login');
    }
}
