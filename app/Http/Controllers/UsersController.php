<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function save(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'password' => 'required|confirmed',
        ]);

        User::save($credentials);
    }
}
