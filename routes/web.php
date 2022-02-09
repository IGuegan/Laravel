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


Route::get('pattern/{n}', 'PatternController@show')->where('n', '[0-9]+');
Route::get('/', 'SingletonControllers@show');
Route::get('singleton', 'SingletonControllers@show');
Route::get('factory', 'FactoryController@show');
Route::get('facade', 'FacadeController@show');
Route::get('aggregation', 'AggregationController@show');
Route::get('observable', 'ObservableController@show');
Route::get('strategie', 'StrategieController@show');
Route::get('template', 'TemplateController@show');
Route::get('command', function () {
    return view('command');
});


