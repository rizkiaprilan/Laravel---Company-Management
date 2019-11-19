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


//Route::get('/home',function (){
//    return view(home);
//});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/karyawan', 'KaryawanController@index');
Route::get('/karyawan/create', 'KaryawanController@create');
Route::post('/karyawan', 'KaryawanController@store');
Route::get('/karyawan/edit/{id}', 'KaryawanController@edit');
Route::put('/karyawan', 'KaryawanController@update');
Route::get('/karyawan/delete/{id}', 'KaryawanController@destroy');

Route::get('/department', 'departmentController@index');
Route::get('/department/create', 'departmentController@create');
Route::post('/department', 'departmentController@store');
Route::get('/department/delete/{id}', 'departmentController@destroy');
Route::get('/department/edit/{id}', 'departmentController@edit');
Route::put('/department', 'departmentController@update');
Route::get('/department/show/{id}', 'departmentController@show');


Route::get('/position', 'positionController@index');
Route::get('/position/create', 'positionController@create');
Route::post('/position', 'positionController@store');
Route::get('/position/delete/{id}', 'positionController@destroy');
Route::get('/position/edit/{id}', 'positionController@edit');
Route::put('/position', 'positionController@update');

Route::get('/employee', 'EmployeeController@index');
Route::get('/employee/create', 'EmployeeController@create');
Route::post('/employee', 'EmployeeController@store');
Route::get('/employee/delete/{id}', 'EmployeeController@destroy');
Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::put('/employee', 'EmployeeController@update');
Route::get('/employee/show/{id}', 'EmployeeController@show');


Route::get('/archive', 'ArchiveController@index');
Route::get('/archive/create', 'ArchiveController@create');
Route::post('/archive', 'ArchiveController@store');
Route::get('/archive/delete/{id}', 'ArchiveController@destroy');
Route::get('/archive/edit/{id}', 'ArchiveController@edit');
Route::put('/archive', 'ArchiveController@update');

Route::get('/inventory', 'InventoryController@index');
Route::get('/inventory/create', 'InventoryController@create');
Route::post('/inventory', 'InventoryController@store');
Route::get('/inventory/delete/{id}', 'InventoryController@destroy');
Route::get('/inventory/edit/{id}', 'InventoryController@edit');
Route::put('/inventory', 'InventoryController@update');
Route::get('/inventory/show/{id}', 'InventoryController@show');

Auth::routes();


