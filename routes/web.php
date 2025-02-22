<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Services\UserService;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//Service Container
Route::get('/test-container', function (Request $request){
    $input = $request->input('key');
    return $input;

});

//Service Providers
Route::get('/test-provider', function (UserService $userService){
    dd( $userService->listUsers());
});

//Service Provider
Route::get('/test-users', [UserController::class, 'index']);

//Facades
Route::get('/test-facade', function (UserService $userService){
    dd( Response::json($userService->listUsers()));
});