<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();

        return view('usuarios' {
            'users' -> $users
        });
    }
}
