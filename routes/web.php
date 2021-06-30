<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);
Route::redirect('home', 'admin-dash', 301);

// frontend routes
Route::get('/', 'FrontendController@home');
Route::get('/products', 'FrontendController@products');
Route::get('/cars', 'FrontendController@cars');
Route::get('/search-car', 'FrontendController@search');
Route::get('/about', 'FrontendController@about');
Route::get('/about', 'FrontendController@about');
Route::get('/view-car/{id}', 'FrontendController@viewcar');

//car reservation
Route::get('/applicant-register/{id}', 'FrontendController@create');
Route::post('/applicant-register', 'FrontendController@store');

//MPESA PAYMENT
Route::get('make-pay', 'MpesaController@STKPushPayment');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin-dash', 'AdminController@index');

    Route::get('/admin-users', 'UserController@index');
    Route::get('/new-user', 'UserController@create');
    Route::post('/new-user', 'UserController@store');
    Route::get('/show-user/{id}', 'UserController@show');
    Route::get('/edit-user/{id}', 'UserController@edit');
    Route::post('/update-user/{id}', 'UserController@update');
    Route::post('/delete-user/{id}', 'UserController@destroy');

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
    Route::post('/delete-vehicle/{id}', 'VehicleController@destroy');
});
