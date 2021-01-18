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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Screen\PagesController@app')->name('app');
/*Route::group(['middleware' => 'auth','prefix'=>'screens','namespace'=>'Screen'], function() {
    Route::get('/', 'PagesController@root')->name('root');
});*/
Route::get('/root', 'Screen\PagesController@root')->name('root');
/*Route::group(['middleware' => 'auth','prefix'=>'screens','namespace'=>'Screen'], function() {
    Route::get('/', 'PagesController@root')->name('root');
});*/