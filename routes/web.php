<?php

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

Route::get('/home', 'HomeController@index')->name('home');

//route group untuk "admin",
//sesuai dengan yang ada di app/http/kernel 
//jika ada yang ingin di tambahkan monggo bisa di sana.
Route::group(['middleware' => ['admin']], function () {
   Route::get('/admin', function () {
       return view('admin.index');
   }); 
   Route::get('/admin/user', function () {
    return view('admin.user.index');
});
