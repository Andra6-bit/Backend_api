<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::select('id', 'name', 'email', 'role')->get());
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['message' => 'User dihapus']);
    }
}