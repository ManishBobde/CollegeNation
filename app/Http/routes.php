<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    Queue::push(function($job){
        Log::info("manish");
        $job->delete();
    });
    return view('welcome');
});

Route::get('test',function(){

    $p = new Pusher('2ce06618e0eadb3de9af','cf4d01f5abd74f2c0d0a','163060');

    $p->trigger("test","userliked","Yah!");
    return "Done";
});

