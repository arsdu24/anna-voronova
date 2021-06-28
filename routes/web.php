<?php



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
Route::get('/',function(){
    return view('pages.index');
})->middleware('auth','guest')->name('home');


Auth::routes();
Route::get('/client', 'ClientController@index')->name('client')->middleware('client');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm');
Route::get('/login','\App\Http\Controllers\Auth\LoginController@showLoginForm');

Route::post('/register/client', 'Auth\RegisterController@createClient');
Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login')->name('login');

