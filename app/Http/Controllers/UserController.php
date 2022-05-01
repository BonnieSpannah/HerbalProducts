<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::withCount('products')->get();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        $user = new User();

        return view('users.create', compact('user'));
    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'role' => $request->post('role'),
            'password' => Hash::make('password')
        ]);

        return redirect()->route('users.index')->withStatus(__($user->name . ' successfully created.'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, UserRequest $request)
    {
        $user->update($request->all('name', 'email', 'role'));

        return redirect()->route('users.index')->withStatus(__($user->name . ' successfully updated.'));
    }

    public function activate(User $user)
    {
        $user->update([
            'status' => 1
        ]);

        return redirect()->route('users.index')->withStatus(__($user->name . ' successfully activated.'));
    }

    public function deactivate(User $user)
    {
        $user->update([
            'status' => 2
        ]);

        return redirect()->route('users.index')->withStatus(__($user->name . ' successfully deactivated.'));
    }
}
