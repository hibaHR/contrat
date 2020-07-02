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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); 

Route::get('freelanceContract','FreelanceContractController@create')->name('freelanceContract.create');
Route::post('freelanceContract','FreelanceContractController@store')->name('freelancecontract.store');
Route::get('freelanceContract/list', 'FreelanceContractController@index')->name('freelancecontract.index');
Route::get('freelanceContract/downloadPDF/{id}','FreelanceContractController@downloadPDF');