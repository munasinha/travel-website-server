<?php

use Illuminate\Http\Request;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('places', 'PlaceController');

Route::put('places/{id}', 'PlaceController@update');

Route::apiResource('packages', 'PackageController');

Route::get('package/{id}', 'PackageController@abc');


Route::apiResource('books', 'BookController');


Route::apiResource('images', 'ImageController');


Route::post('sendmail', 'sendEmailController@send');



Route::get('topPlaces', 'PlaceController@topPlaces');

Route::get('topPackages', 'PackageController@topPackages');
