<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class usersController extends Controller
{

    public function index()
    {
        return response()->json(User::get(), 200);
    }
    public function show($id)
    {
        return response()->json(User::find($id), 200);
    }
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response()->json($user, 200);
    }
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }
    public function delete(Request $request, User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
}
