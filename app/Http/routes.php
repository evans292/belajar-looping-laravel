<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoopingController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/looping', 'LoopingController@index');
Route::post('/looping/proses', 'LoopingController@aksi');