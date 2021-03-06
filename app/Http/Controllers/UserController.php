<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\ToDoList;

class UserController extends Controller
{
    /**
     * Create a new user
     * 
     * @param Illuminate\Http\Request
     * @return json response
     */
    public function create(Request $request) {
        $todolist = User::create($request->all());

        return response()->json($todolist, 201);
    }

    /**
     * Edit a user
     * 
     * @param string
     * @param Illuminate\Http\Request
     * @return json response
     */
    public function update($id, Request $request) {
        $todolist = User::findOrFail($id);
        $todolist->update($request->all());

        return response()->json($todolist, 200);
    }

    /**
     * Get user by ID
     * 
     * @param Illuminate\Http\Request
     * @return json
     */
    public function show($id) {
        return response()->json(User::find($id));
    }

    /**
     * Login
     * 
     * @param Illuminate\Http\Request
     * @return json
     */
    public function login(Request $request) {
        $req = $request->all();
        $whereclause = ['email' => $req["email"], 'password' => $req["password"]];
        $user_login = User::where($whereclause)->first();
        return response()->json($user_login);
    }
}
