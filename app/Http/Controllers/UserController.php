<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(10);

        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        if ($user->id != auth()->id()) {
            return redirect(route('users.show', $user->id));
        }

        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $user->update(request()->all());

        return back();
    }
}
