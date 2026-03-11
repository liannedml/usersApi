<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // GET /api/users
    public function index()
    {
        $users = User::select(
            'id',
            'name',
            'email',
            'gender',
            'age',
            'address',
            'contact_number',

            )->get();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }
}
