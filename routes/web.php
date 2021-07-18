<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);
Route::redirect('home', 'admin-dash', 301);

// frontend routes
Route::get('/', 'FrontendController@home');
Route::get('/products', 'FrontendController@products');
Route::get('/about', 'FrontendController@about');
Route::get('/support', 'FrontendController@support');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin-dash', 'AdminController@index');

    Route::get('/admin-users', 'UserController@index');
    Route::get('/new-user', 'UserController@create');
    Route::post('/new-user', 'UserController@store');
    Route::get('/show-user/{id}', 'UserController@show');
    Route::get('/edit-user/{id}', 'UserController@edit');
    Route::post('/update-user/{id}', 'UserController@update');
    Route::get('/delete-user/{id}', 'UserController@destroy');

    Route::get('/admin-applications', 'ApplicantController@index');
    Route::get('/new-application', 'ApplicantController@create');
    Route::post('/new-application', 'ApplicantController@store');
    Route::get('/show-application/{id}', 'ApplicantController@show');
    Route::get('/edit-application/{id}', 'ApplicantController@edit');
    Route::post('/update-application/{id}', 'ApplicantController@update');

    Route::get('/admin-vehicles', 'VehicleController@index');
    Route::get('/new-vehicle', 'VehicleController@create');
    Route::post('/new-vehicle', 'VehicleController@store');
    Route::get('/show-vehicle/{id}', 'VehicleController@show');
    Route::get('/edit-vehicle/{id}', 'VehicleController@edit');
    Route::post('/update-vehicle/{id}', 'VehicleController@update');
    Route::get('/delete-vehicle/{id}', 'VehicleController@destroy');
});
