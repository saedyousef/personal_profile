<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\SaveUserRequest;


class UsersController extends Controller
{
    
    public function update_user(SaveUserRequest $request)
    {
        $user = User::find(Auth::user()->id);

        $user->name 	= $request->input('name');
        $user->username = $request->input('username');
    	$user->email    = $request->input('email');

    	$user->save();

    }
}
