<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/test-document', 'TestController@index')->name('tests.index');
Route::get('/test-create', 'TestController@create')->name('tests.create');
Route::post('/test-create', 'TestController@store')->name('tests.store');
Route::get('/test-delete/{id}', 'TestController@destroy')->name('test.delete');
Route::get('/test-edit/{id}', 'TestController@edit')->name('test.edit');
Route::post('/test-edit/{id}', 'TestController@update')->name('test.update');

Route::get('/dept', 'DeptController@index')->name('depts.index');
Route::get('/dept-create', 'DeptController@create')->name('depts.create');
Route::post('/dept-create', 'DeptController@store')->name('depts.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
