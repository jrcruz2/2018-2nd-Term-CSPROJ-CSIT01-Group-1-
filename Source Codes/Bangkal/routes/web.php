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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('sections', 'SectionController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-class', 'HomeController@showAddClass');
Route::get('/view-classes', 'HomeController@showClasses');

    Route::prefix('registrar')->group( function() {
        Route::get('/login', 'Auth\RegistrarLoginController@showLoginForm')->name('registrar.login');
        Route::post('/login', 'Auth\RegistrarLoginController@login')->name('registrar.login.submit');
        Route::get('/', 'RegistrarController@index')->name('registrar.dashboard');

        Route::get('/section-list', 'SectionController@index');
    });

    Route::prefix('student')->group( function() {
        Route::get('/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
        Route::post('/login', 'Auth\StudentLoginController@login')->name('student.login.submit');
        Route::get('/', 'StudentController@index')->name('student.dashboard');
    });

