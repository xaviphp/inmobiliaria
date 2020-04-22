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

Route::get('/xavi', function () {
    return "hola xavi";
});
Route::get('xac', function () {
    return response('<h1>hola que tal</h1>', 404)
    ->header('Content-Type', 'text/html')
    ->cookie('projecte', 'valor que tiene', 30);
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('image-upload', 'ImageUploadController@imageUploadPost');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function (){
    Route::resource('inmobiliarias', 'Admin\InmobiliariaController');

});
