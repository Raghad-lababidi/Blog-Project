<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\BlogController;

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

Route::get('/', 'BlogController@index');
Route::get('/blogs/show', 'BlogController@find');
Route::post('/blogs/create', 'BlogController@create');
Route::put('/blogs/update', 'BlogController@update');
Route::delete('/blogs/delete', 'BlogController@delete');



