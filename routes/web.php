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
Route::get('/','\App\Http\Controllers\HomeController@index')->middleware('auth','guest')->name('home');
Route::get('/client', 'ClientController@index')->middleware('client')->name('client');
Route::get('/products','ProductsController@clientViewAll')->middleware('client')->name('productsView');
Route::get('/order','\App\Http\Controllers\OrdersController@showForm');
Route::get('/collections','CategoryController@clientViewAll')->name('categoriesList');
Route::get('/collections/{category}','CategoryController@categoryShow')->name('categoryShow');
Route::get('/products/{id}','ProductsController@clientProductPage')->middleware('client')->name('productView');

Route::post('/cart/add','CartController@addToCart')->middleware('client')->name('addToCart');
Route::post('/create_order','\App\Http\Controllers\OrdersController@createOrder')->name('create_order');
Route::post('cart/delete','CartController@ItemDelete')->name('cartItemDelete');
Route::post('cart/qty_plus','CartController@qtyPlus')->name('qtyPlus');
Route::post('cart/qty_minus','CartController@qtyMinus')->name('qtyMinus');
Route::post('cart/qty_update','CartController@qtyUpdate')->name('qtyUpdate');

Auth::routes();
Route::get('/login','\App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm');

Route::post('/register/client', 'Auth\RegisterController@createClient');
Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login')->name('login');
//    Admin panel routes
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('product-list','ProductsController@viewList')->name('productList');
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('product-list/{id}','ProductsController@productPage')->name('productPage');
    Route::get('categories-list','CategoryController@viewList')->name('categoriesList');
    Route::get('categories-list/{category}','CategoryController@categoryPage')->name('categoryPage');

    Route::post('review/publish','ReviewController@publishReview')->name('reviewPublish');
    Route::post('review/unpublish','ReviewController@unpublishReview')->name('reviewUnpublish');
    Route::post('review/delete','ReviewController@deleteReview')->name('reviewDelete');
    Route::post('add-product','ProductsController@createProduct')->name('createPdroduct');
    Route::post('product/save/{id}','ProductsController@updateProduct')->name('productUpdate');
    Route::post('product/image-delete','ProductsController@deleteImage')->name('imageDelete');
    Route::post('product/delete/{id}','ProductsController@deleteProduct')->name('productDelete');
    Route::post('category/delete/{category}','CategoryController@deleteCategory')->name('categoryDelete');
    Route::post('add-category','CategoryController@createCategory')->name('createCategory');
    Route::post('category/save/{category}','CategoryController@updateCategory')->name('categoryUpdate');

});
