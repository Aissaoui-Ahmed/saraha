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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'profileController@index')->name('profile');
Route::put('/profile/update', 'profileController@update')->name('updateInfo');
Route::put('/profile/updateAdditionalInfo', 'profileController@updateAdditionals')->name('updateAdditional');
Route::put('/profile/updateSecurity', 'profileController@updateSecurity')->name('updateSecurity');
Route::get('/about', 'aboutController@about')->name('about');
Route::get('/contact', 'aboutController@contact')->name('contact');
Route::get('/{username}', 'messageController@index')->name('username');
Route::post('/{user}/create', 'messageController@create');
Route::delete('/home/delete/{id}', 'messageController@destroy');


