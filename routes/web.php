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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Backend\CourseController@dashboard')->name('admin.dashboard');
    Route::resource('courses', 'Backend\CourseController');
    Route::resource('categories', 'Backend\CategoryController');
    Route::get('materi/{nama_kelas}', 'Backend\MateriController@create')->name('materi.create');
    Route::post('materi', 'Backend\MateriController@store')->name('materi.store');
    Route::resource('orders', 'Backend\OrderController', ['as' => 'admin']);
});



Route::get('/', 'Frontend\FrontendController@index');
Route::get('kategori-kelas', 'Frontend\FrontendController@kelas')->name('kelas');
Route::get('/kelas', 'Frontend\FrontendController@rincianKelas')->name('kelas.rincian');
Route::get('/pembayaran', 'Frontend\FrontendController@pembayaran')->name('pembayaran');
Route::get('profil', 'Frontend\FrontendController@profile')->name('profile')->middleware('auth');
Route::get('profil/{user}', 'Frontend\UserController@edit')->name('profile.edit')->middleware('auth');
Route::put('profil/{user}', 'Frontend\UserController@update')->name('profile.update')->middleware('auth');
Route::get('order/', 'Frontend\OrderController@create')->name('order.create')->middleware('auth');
Route::post('checkout', 'Frontend\OrderController@store')->name('order.store')->middleware('auth');
Route::get('invoice', 'Frontend\OrderController@invoice')->name('order.invoice')->middleware('auth');
Route::get('daftar', 'Frontend\UserController@create')->name('user.daftar');
Route::post('daftar', 'Frontend\UserController@store')->name('user.store');
Route::get('kelas-saya', 'Frontend\FrontendController@kelasSaya')->name('kelas-saya')->middleware('auth');
Auth::routes([
    'register' => false,
]);
Route::get('/home', 'HomeController@index')->name('home');
