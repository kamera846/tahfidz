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
    // User
    Route::get('/', 'HomeController@index');
    Route::get('/search', 'HomeController@search');
    
    // Admin
    Route::get('register/user', 'Auth\RegisterUserController@index');
    Route::post('register/user', 'Auth\RegisterUserController@registerUser');

    // Manage Santri
    Route::get('/manage/santri', 'Auth\ManageSantriController@index');

    Route::get('/manage/santri/search', 'Auth\ManageSantriController@search');

    Route::get('/manage/santri/new_data', 'Auth\ManageSantriController@new_data');

    Route::post('/manage/santri/create', 'Auth\ManageSantriController@create');

    Route::get('/manage/santri/edit/{id}', 'Auth\ManageSantriController@edit');

    Route::put('/manage/santri/update/{id}', 'Auth\ManageSantriController@update');

    Route::get('/manage/santri/delete/{id}', 'Auth\ManageSantriController@delete');

    // Manage Wali Santri
    Route::get('/manage/wali', 'Auth\ManageWali@index');

    Route::get('/manage/wali/search', 'Auth\ManageWali@search');

    Route::get('/manage/wali/new_data', 'Auth\ManageWali@new_data');

    Route::post('/manage/wali/create', 'Auth\ManageWali@create');

    Route::get('/manage/wali/edit/{id}', 'Auth\ManageWali@edit');

    Route::put('/manage/wali/update/{id}', 'Auth\ManageWali@update');

    Route::get('/manage/wali/delete/{id}', 'Auth\ManageWali@delete');
    
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
