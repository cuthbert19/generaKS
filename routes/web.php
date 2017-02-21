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


// Route::get('/hosts', function () {
// 	return view('hosts');
// });

Route::get('/projects/{project}/hosts','ProjectController@show');

// Route::get('/projects/{project}','ProjectController@show');
Route::resource('/projects','ProjectController');


// Route::get('/hosts/{host}','HostController@show');

Route::resource('/hosts', 'HostController');


Route::resource('/netdevices', 'NetdeviceController');


Route::resource('/partitionings', 'PartitioningController');
