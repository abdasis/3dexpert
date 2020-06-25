<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\CourseController@dashboard')->name('admin.dashboard');
    Route::resource('courses', 'Backend\CourseController');
    Route::resource('categories', 'Backend\CategoryController');
    Route::get('materi/{nama_kelas}', 'Backend\MateriController@create')->name('materi.create');
    Route::post('materi', 'Backend\MateriController@store')->name('materi.store');
});



Route::get('/', 'Frontend\FrontendController@index');
Route::get('kategori-kelas', 'Frontend\FrontendController@kelas')->name('kelas');
Route::get('/kelas', 'Frontend\FrontendController@rincianKelas')->name('kelas.rincian');
Route::get('/pembayaran', 'Frontend\FrontendController@pembayaran')->name('pembayaran');
Route::get('profil', 'Frontend\FrontendController@profile')->name('profile')->middleware('auth');
Route::get('profil/{user}', 'Frontend\UserController@edit')->name('profile.edit');
Route::put('profil/{user}', 'Frontend\UserController@update')->name('profile.update');
Route::post('order', 'Frontend\OrderController@store')->name('order.store');
Route::get('order', 'Frontend\OrderController@create')->name('order.create');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
