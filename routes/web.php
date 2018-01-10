<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('todolist',  ['uses' => 'ToDoListController@showAll']);
    $router->get('todolist/{user_id}/{id}',  ['uses' => 'ToDoListController@show']);
    $router->get('todolistbyuserid/{user_id}',  ['uses' => 'ToDoListController@showByUserId']);
    $router->post('todolist', ['uses' => 'ToDoListController@create']);
    $router->delete('todolist', ['uses' => 'ToDoListController@delete']);
    $router->put('todolist/{id}', ['uses' => 'ToDoListController@update']);
    $router->put('todolistcomplete/{id}', ['uses' => 'ToDoListController@setToDoListComplete']);
    $router->get('incompletecount/{user_id}', ['uses' => 'ToDoListController@getIncompleteCount']);

    $router->get('user',  ['uses' => 'UserController@showAll']);
    $router->get('user/{id}',  ['uses' => 'UserController@show']);
    $router->get('user/{id}',  ['uses' => 'UserController@show']);
    $router->post('user', ['uses' => 'UserController@create']);
    $router->delete('user', ['uses' => 'UserController@delete']);
    $router->put('user/{id}', ['uses' => 'UserController@update']);
    $router->post('login',  ['uses' => 'UserController@login']);
});
