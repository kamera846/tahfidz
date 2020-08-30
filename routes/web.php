<?php

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index');

    Route::get('register/user', 'Auth\RegisterUserController@index');
    Route::post('register/user', 'Auth\RegisterUserController@registerUser');
});

Route::get('add-user', function () {
    \DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'email@gmail.com',
        'password' => bcrypt('12345678'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'level' => 'user'
    ]);
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/');
});

Route::get('logout', function () {
    \Auth::logout();
    return redirect('/login');
});
