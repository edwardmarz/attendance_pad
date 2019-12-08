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

// Route::resource('matakuliahs','MatakuliahController');
// Route::resource('lactures','AdminController');


Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('login', 'Auth\AdminLoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.auth.logout');

    Route::namespace('Admin')->group(function () {        
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
        Route::get('register', 'AdminController@create')->name('admin.register');
        Route::post('register', 'AdminController@store')->name('admin.register.store');
        
        Route::name('admin.')->group(function () {       
            //user controller     
            Route::resource('users', 'UserController');
            Route::resource('lectures','LectureController');            
            Route::resource('grades','GradeController');
            Route::resource('courses','CourseController');
        });
    });
});

Route::prefix('lecture')->group(function () {
    Route::get('/', 'LectureController@index')->name('lecture.dashboard');
    Route::get('register', 'LectureController@create')->name('lecture.register');
    Route::post('register', 'LectureController@store')->name('lecture.register.store');
    Route::get('login', 'Auth\LectureLoginController@login')->name('lecture.auth.login');
    Route::post('login', 'Auth\LectureLoginController@loginAdmin')->name('lecture.auth.loginLecture');
    Route::post('logout', 'Auth\LectureLoginController@logout')->name('lecture.auth.logout');
});

