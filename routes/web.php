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
Route::get('/client', 'ClientController@index')->middleware('client')->name('client');
Route::get('/products','ProductsController@clientViewAll')->middleware('client')->name('productsView');
Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm');
Route::get('/login','\App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::get('/order','\App\Http\Controllers\OrdersController@showForm');

Route::post('/create_order','\App\Http\Controllers\OrdersController@createOrder')->name('create_order');
Route::post('/register/client', 'Auth\RegisterController@createClient');
Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login')->name('login');

//    Admin panel routes
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('product-list','ProductsController@viewList')->name('productList');
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('product-list/{id}','ProductsController@productPage')->name('productPage');
<<<<<<< HEAD
    
    Route::post('review/publish','ReviewController@publishReview')->name('reviewPublish');
    Route::post('review/unpublish','ReviewController@unpublishReview')->name('reviewUnpublish');
    Route::post('review/delete','ReviewController@deleteReview')->name('reviewDelete');
    
    Route::post('add-product','ProductsController@createProduct')->name('createPdroduct');
    Route::post('product/save/{id}','ProductsController@updateProduct')->name('productUpdate');
    Route::post('product/image-delete','ProductsController@deleteImage')->name('imageDelete');
    Route::post('product/delete/{id}','ProductsController@deleteProduct')->name('productDelete');

=======
>>>>>>> beta
});
