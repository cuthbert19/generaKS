<?php

//namespace generaKS;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

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
})->name('home');


Route::resource('/projects','ProjectController');
Route::get('/projects/{project}/delete','ProjectController@delete');

Route::get('/projects/{project}/hosts','HostController@create');
Route::post('/projects/{project}/hosts','HostController@store');


Route::resource('/hosts', 'HostController');
Route::get('/hosts/{host}/delete','HostController@delete');

Route::get('/hosts/{host}/netdevices','NetdeviceController@create');
Route::post('/hosts/{host}/netdevices','NetdeviceController@store');


Route::resource('/netdevices', 'NetdeviceController');
Route::get('/netdevices/{netdevice}/delete','NetdeviceController@delete');


Route::resource('/partitionings', 'PartitioningController');
Route::get('/partitionings/{partitioning}/delete','PartitioningController@delete');

Route::get('/partitionings/{partitioning}/diskobjects','DiskobjectController@create');
Route::post('/partitionings/{partitioning}/diskobjects','DiskobjectController@store');
