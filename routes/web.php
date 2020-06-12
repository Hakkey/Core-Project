<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@dashboard')->name('home');

Route::get('/', function(){
    return view('welcome');
});


Route::get('index', 'EmployeesController@index');
Route::get('addemployee', 'EmployeesController@addemployee');
Route::post('addemployee/store', 'EmployeesController@store');
Route::get('listemployee', 'EmployeesController@listemployee');
Route::get('listemployee/{id}', 'EmployeesController@show');
Route::get('listemployee/{id}/edit', 'EmployeesController@edit');
Route::put('listemployee/{id}/update', 'EmployeesController@update');
Route::delete('listemployee/{id}/delete', 'EmployeesController@destroy');
Route::get('listemployee/{id}/delete', ['as' => 'employees.delete', 'uses' => 'EmployeesController@destroy']);
