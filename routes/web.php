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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/company','CompanyController@index')->name('company');
Route::get('company/create_company','CompanyController@create');
Route::post('/create_company/upload','CompanyController@store');


Route::get('/employe','EmployeController@index')->name('employe');
Route::get('/employe/create_employe','EmployeController@create');
Route::get('/employe/create_employe_upload','EmployeController@store');

