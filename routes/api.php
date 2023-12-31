<?php
 
use Illuminate\Http\Request;
 
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Hariyanto Aditya Ramadhan 411201093
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 
Route::middleware('auth:api')->get('/kurir', function (Request $request) {
   return $request->kurir();
});
 
Route::post('login', 'AuthController@login');
Route::group([
    'middleware' => ['api','jwt.verify'],
], function ($router) {
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});