<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\ToDoList;

class ToDoListController extends Controller
{
    /**
     * Create a new to do list
     * 
     * @param Illuminate\Http\Request
     * @return json
     */
    public function create(Request $request) {
        $todolist = ToDoList::create($request->all());
        return response()->json($todolist, 201);
    }

    /**
     * Edit to do list item
     * 
     * @param string
     * @param Illuminate\Http\Request
     * @return json
     */
    public function update($id, Request $request) {
        $todolist = ToDoList::findOrFail($id);

        $todolist->update($request->all());

        return response()->json($todolist, 200);
    }

     /**
     * Show to do list by user ID and to do list ID
     * 
     * @param string
     * @param string
     * @return json
     */
    public function show($user_id, $id) {
        $todolistByUserId = ToDoList::where('user_id', $user_id);
        $todolist = $todolistByUserId->find($id);
        return  response()->json($todolist);
    }

     /**
     * Show all to do list by user ID
     * 
     * @param string
     * @return json
     */
    public function showByUserId($user_id) {
        return  response()->json(ToDoList::where('user_id', $user_id)->get());
    }

    /**
     * Mark to do list as complete
     * 
     * @param string
     * @return json
     */
    public function setToDoListComplete($id) {
        $todolist = ToDoList::findOrFail($id);
        $todolist->is_completed = 1;

        $todolist->update();

        return response()->json($todolist, 200);
    }

    /**
     * Show to do list by user ID and to do list ID
     * 
     * @param string
     * @param string
     * @return json
     */
    public function getIncompleteCount($user_id) {
        $whereclause = ['user_id' => $user_id, 'is_completed' => 0];
        $todolist = ToDoList::where($whereclause)->get();
        return  response()->json(count($todolist));
    }

    /**
     * Format due date by date and time
     * 
     * @param string
     * @param string
     * @return string
     */
    private function formatDateTime($date, $time) {
        return $date . ' ' .$time;
    }

    // public function delete($id) {
    //     ToDoList::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }

    //  /**
    //  * Show all to do lists
    //  * 
    //  * @return json response
    //  */
    // public function showAll() {
    //     return  response()->json(ToDoList::all());
    // }
}
