<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {
    	$user->update(request()->all());

    	return back();
    }
}
