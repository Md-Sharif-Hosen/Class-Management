<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group( ['prefix'=>'admin','middleware'=>['auth'], 'namespace'=>'Admin' ],function() {
    //project
    Route::get('/create','ProjectNameController@create')->name('admin.project.create');
    Route::post('/store','ProjectNameController@store')->name('admin.project.store');

    Route::get('/projects','ProjectNameController@index')->name('admin.project.index');
    Route::get('/projects/{project_id}','ProjectTaskController@project_details')->name('admin.projectdetails');
    Route::post('/projects/tasks/store','ProjectTaskController@store')->name('admin.projecttask.store');

    //project task
    Route::get('/taskcreate','ProjectTaskController@create')->name('admin.projecttask.create');
    // Route::get('/taskindex','ProjectTaskController@index')->name('admin.projecttask.index');
});
