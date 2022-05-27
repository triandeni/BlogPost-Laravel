<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
  
    public function index()
    {
        return view('dashboard.author.index',[

            'users' => User::get() 
        ]);
    }


    public function show(User $user)
    {
        return view('dashboard.author.show', [
            'user' => $user,
        ]);
    }

    public function destroy(user $users)
    {
        //
    }
}
