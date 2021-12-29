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
/*
Route::get('/', function () {
    return view('vehicles');
    
});
*/

Route::get('/', 'HomeController@index');
Route::get('/vehicles', 'VehiclesController@index');
Route::get('/agilog/{vid}', 'AgiLogController@showagilog');
Route::get('/agicount/{vid}', 'AgiCountController@showagicount');
