<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/**
 * Todo Routes:
 *              get all Todos
 */

Route::get('/index',[TodoController::class,'index']);
/**
 *              add new Todo
 */
Route::post('/store',[TodoController::class,'store']);
/**
 *              delete todo by id
 */
Route::delete('/delete/{id}',[TodoController::class,'destroy']);
/**
 *              update todo by id
 */
Route::put('/update/{id}',[TodoController::class,'update']);

Route::get('/search/{title}',[TodoController::class,'search']);

/**
 * user Routes:
 *              get all Users
 */
Route::get('/index',[UserController::class,'index']);
/**
 *              add new Todo
 */
Route::post('/store',[UserController::class,'store']);
/**
 *              delete todo by id
 */
Route::delete('/delete/{id}',[UserController::class,'destroy']);
/**
 *              update todo by id
 */
Route::put('/update/{id}',[UserController::class,'update']);
