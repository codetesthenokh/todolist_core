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

    public function update($id, Request $request) {
        $todolist = User::findOrFail($id);
        $todolist->update($request->all());

        return response()->json($todolist, 200);
    }

    // public function delete($id) {
    //     User::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }

    // public function showAll() {
    //     return response()->json(User::all());
    // }

    /**
     * Get user by ID
     * 
     * @param Illuminate\Http\Request
     * @return json
     */
    public function show($id) {
        return response()->json(User::find($id));
    }
}
