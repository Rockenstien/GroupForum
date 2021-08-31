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

Route::get('/', function () {
    return view('home');
});

// Route::get('/g/{GroupName}')

Route::get('/group', function(){
    return view('group-page');
});

Route::get('/create-group', function(){
    return view('create-group');
});

// Route::get('/u/{Usernam}')

Route::get('/user', function(){
    return view('user-page');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
