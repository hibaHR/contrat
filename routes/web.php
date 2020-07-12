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
Route::get('/create-table', 'TableController@operate');
Route::get('dynamic-field', 'DynamicFieldController@index');
Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');
Auth::routes(); 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('freelanceContract','FreelanceContractController@create')->name('freelanceContract.create');
Route::post('freelanceContract','FreelanceContractController@store')->name('freelancecontract.store');
Route::get('freelanceContract/list', 'FreelanceContractController@index')->name('freelancecontract.index');
Route::get('freelanceContract/downloadPDF/{id}','FreelanceContractController@downloadPDF');
Route::get('users','UserController@create');
// Route::get('contracts', 'ContractController@create')->name('contracts.create');
// Route::post('contracts', 'ContractController@store')->name('contracts.store');
// Route::get('listcontract', 'ContractController@index')->name('contracts.listcontract');
// Route::get('/downloadContractPDF/{id}','ContractController@downloadPDF');
Route::get('/create-table', 'TableController@operate');

Route::get('/freelance-contract', 'FreelanceController@getIndex')->name('freelance.contract');

// Contracts Route
Route::get('contract', 'ContractController@getIndex')->name('contract.index');

Route::get('contract/new', 'ContractController@getNewcontract')->name('contract.new');
Route::post('contract/new', 'ContractController@postContract')->name('contract.post');
//fields route 

Route::get('dynamic-field', 'DynamicFieldController@index');
Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');
