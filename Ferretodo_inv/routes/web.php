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

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages

Route::get('/public',function(Request $request){
    dd("HOLA");
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');

    //users
    Route::get('/users',$controller_path . '\pages\users@index')->name('pages-users');
    Route::get('/users/create',$controller_path . '\pages\users@create')->name('pages-users-create');
    Route::post('/users/store',$controller_path . '\pages\users@store')->name('pages-users-store');
    Route::get('/users/show/{user_id}',$controller_path . '\pages\users@show')->name('pages-users-show');
    Route::post('/users/update',$controller_path . '\pages\users@update')->name('pages-users-update');
    Route::get('/users/destroiy/{user_id}',$controller_path . '\pages\users@destroy')->name('pages-users-destroy');

    //types
    Route::get('/types',$controller_path . '\pages\Types@index')->name('pages-types');
    Route::get('/types/create',$controller_path . '\pages\Types@create')->name('pages-types-create');
    Route::post('/types/store',$controller_path . '\pages\Types@store')->name('pages-types-store');
    Route::get('/types/show/{type_id}',$controller_path . '\pages\Types@show')->name('pages-types-show');
    Route::post('/types/update',$controller_path . '\pages\Types@update')->name('pages-types-update');
    Route::get('/types/destroiy/{type_id}',$controller_path . '\pages\Types@destroy')->name('pages-types-destroy');
    Route::get('/types/switch/{type_id}',$controller_path . '\pages\Types@switch')->name('pages-types-switch');

    //origin
    Route::get('/tiendas',$controller_path . '\pages\tiendas@index')->name('pages-tiendas');
    Route::get('/tiendas/create',$controller_path . '\pages\tiendas@create')->name('pages-tiendas-create');
    Route::post('/tienda/store',$controller_path . '\pages\tiendas@store')->name('pages-tiendas-store');
    Route::get('/tiendas/show/{origin_id}',$controller_path . '\pages\tiendas@show')->name('pages-tiendas-show');
    Route::post('/tiendas/update',$controller_path . '\pages\tiendas@update')->name('pages-tiendas-update');
    Route::get('/tiendas/destroiy/{origin_id}',$controller_path . '\pages\tiendas@destroy')->name('pages-tiendas-destroy');
    Route::get('/tiendas/switch/{origin_id}',$controller_path . '\pages\tiendas@switch')->name('pages-tiendas-switch');

});
