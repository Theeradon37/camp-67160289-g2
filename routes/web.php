<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('html101');
// });

Route::get('/view2', function(){
    return view('myview2');
});
Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

Route::get('/', [App\Http\Controllers\WorkShop::class, 'index']);
Route::post('/', [App\Http\Controllers\WorkShop::class, 'store']);

Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('/flight', 'FlightController@index');
    Route::get('/flight/{id}', 'FlightController@update');
    Route::post('/flight', 'FlightController@store');
    Route::put('/flight/{id}', 'FlightController@update_action');
    Route::delete('/flight/{id}', 'FlightController@delete_action');
});
