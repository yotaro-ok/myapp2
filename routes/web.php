<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['middleware' => 'auth', function () {
    return view('tasks');
}]);
Route::get('/', ['middleware' => 'guest', function () {
    return view('welcome');
}]);

Route::get('/home', function () {
    return redirect('tasks');
});
Route::resource('tasks', 'TaskController')->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/logout', function() {
    Auth::logout();
    return view('welcome');
});