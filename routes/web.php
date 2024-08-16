<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::group(['middleware'=>'auth:web'], function () {
    Route::get('/',[UserController::class, 'index'])->name('home');
    /**
     * THIS IS ROUTES FOR USER CONTROLLER
     */
    Route::controller(UserController::class)->group(function () {
        Route::get('/setting', function (){ return view('setting'); })->name('setting');
        Route::put('/setting/update', 'updatePassword')->name('user_password_update');
    });

    /**
     * THIS IS ROUTES FOR TASK CONTROLLER
     */
    Route::controller(TaskController::class)->group(function () {
        Route::get('/tasks', 'index')->name('view_tasks');
        Route::get('/task/{task}', 'show')->name('show_task');
        Route::post('/task/create', 'create')->name('create_task');
        Route::post('/task/store', 'store')->name('store_task');
        Route::get('/task/edit/{task}', 'edit')->name('edit_task');
        Route::put('/task/update/{task}', 'update')->name('update_task');
        Route::delete('/task/delete/{task}', 'destroy')->name('destroy_task');
        Route::put('/task/{task}/update', 'changeStatus')->name('change_task_status');
    });
});


