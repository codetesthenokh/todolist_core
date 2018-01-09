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
        $req = $request->all();
        $enc_pass = md5($req['password']);
        $req['password'] = $enc_pass;
        $todolist = User::create($req);

        return response()->json($todolist, 201);
    }

    // public function update($id, Request $request) {
    //     $todolist = User::findOrFail($id);
    //     $todolist->update($request->all());

    //     return response()->json($todolist, 200);
    // }

    // public function delete($id) {
    //     User::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }

    // public function showAll() {
    //     return response()->json(User::all());
    // }

    
    // public function show($id) {
    //     return response()->json(User::find($id));
    // }

    // public function login(Request $request) {
    //     $req = $request->all();
    //     $email = $req['email'];
    //     $password = $req['password'];
    //     $whereclause = ['email' => $email, 'password' => $password];
    //     $user_login = User::where($whereclause)->get();
    //     return response()->json($user_login);
    // }
}
