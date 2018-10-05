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
Route::get('/bind', 'BindController@index');
Route::get('/singleton', 'SingletonController@index');
Route::get('/instance', 'InstanceController@index');
Route::get('/interfaceToImplement', 'InterfaceToImplementController@index');
Route::get('/car', 'CarController@index');
Route::get('/bike', 'BikeController@index');
Route::get('/tagging', 'TaggingController@index');
Route::get('/primitives', 'PrimitivesController@index');
