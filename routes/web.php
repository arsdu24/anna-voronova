<?php

use App\Http\Controllers\SiteSettingsController;
use App\SiteSettings;
use Illuminate\Routing\RouteRegistrar;
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
Route::get('/checkout','\App\Http\Controllers\OrdersController@showForm');
Route::get('/cart','OrdersController@index')->name('cart');
Route::get('/collections','CollectionsController@clientViewAll')->name('collectionsList');
Route::get('/collections/{collection}','CollectionsController@collectionShow')->name('collectionShow');
Route::get('/products/{id}','ProductsController@clientProductPage')->middleware('client')->name('productView');
Route::get('/search','SearchController@search')->name('search');

Route::post('/cart/add','OrdersController@addToCart')->middleware('client')->name('addToCart');
Route::post('/checkout','\App\Http\Controllers\OrdersController@createOrder')->name('create_order');
Route::post('cart/delete','OrdersController@ItemDelete')->name('cartItemDelete');
Route::post('cart/qty_update','OrdersController@qtyUpdate')->name('qtyUpdate');
Route::post('products/review','ReviewController@createReview')->name('createReview');

//Blog routes
Route::get('/blogs/news','BlogController@index')->name('blogs');
Route::get('/blogs/news/{article}','BlogController@blogPage')->name(' blogPage');
Route::get('/blogs/tagged/{slug}','BlogController@Tagged')->name('TaggedPage');

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
    Route::get('collections-list','CollectionsController@viewList')->name('collectionsList');
    Route::get('collections-list/{collection}','CollectionsController@collectionPage')->name('collectionPage');
    Route::get('orders-list','OrdersController@viewList')->name('ordersList');
    Route::get('orders-list/{order}','OrdersController@orderPage')->name('orderPage');
    Route::get('blogs','BlogController@admin_blogs')->name('admin_blogs');
    Route::get('blogs/{article}','BlogController@article_update_page')->name('admin_article');
    Route::get('blog/categories','BlogController@categoriesList')->name('articleCategories');
    Route::get('blog/tags','BlogController@tagsList')->name('articleTags');
    Route::get('blog/product-tags','ProductsController@tagsList')->name('Tags');
    Route::get('sliders','BannerController@slidersList')->name('Sliders');
    Route::get('banners','BannerController@bannersList')->name('Banners');
    Route::get('/search','SearchController@search')->name('adminSearch');
    Route::get('/categories','ProductsController@categoriesList')->name('Categories');

    Route::get('/site_settings','SiteSettingsController@showform')->name('settingsForm');
    Route::post('site/update',"SiteSettingsController@update")->name('settingsUpdate');
    Route::post('review/publish','ReviewController@publishReview')->name('reviewPublish');
    Route::post('review/unpublish','ReviewController@unpublishReview')->name('reviewUnpublish');
    Route::post('review/delete','ReviewController@deleteReview')->name('reviewDelete');
    Route::post('add-product','ProductsController@createProduct')->name('createPdroduct');
    Route::post('product/save/{id}','ProductsController@updateProduct')->name('productUpdate');
    Route::post('product/image-delete','ProductsController@deleteImage')->name('imageDelete');
    Route::post('product/delete/{id}','ProductsController@deleteProduct')->name('productDelete');
    Route::post('order/delete','OrdersController@deleteOrder')->name('orderDelete');
    Route::post('order/update_status','OrdersController@updateOrderStatus')->name('orderStatusUpdate');

    Route::post('collection/delete/{collection}','CollectionsController@deleteCollection')->name('collectionDelete');
    Route::post('add-collection','CollectionsController@createCollection')->name('createCollection');
    Route::post('collection/save/{collection}','CollectionsController@updateCollection')->name('collectionUpdate');
    Route::post('tag/delete/{category}','ProductsController@deleteCategory')->name('deleteCategory');
    Route::post('add-category','ProductsController@createCategory')->name('createCategory');
    Route::post('category/save/{category}','ProductsController@updateCategory')->name('updateCategory');

    Route::post('blogs/add','BlogController@create_article')->name('createArticle');
    Route::post('blogs/delete/{article}','BlogController@delete_article')->name('articleDelete');
    Route::post('blogs/update/{article}','BlogController@articleUpdate')->name('articleUpdate');
    Route::post('blogs/category/create','BlogController@categoryCreate')->name('createArticleCategory');
    Route::post('blogs/category/delete/{category}','BlogController@categoryDelete')->name('deleteArticleCategory');
    Route::post('blogs/category/update/{category}','BlogController@categoryUpdate')->name('updateArticleCategory');
    Route::post('blogs/tags/create','BlogController@tagCreate')->name('createArticleTag');
    Route::post('blogs/tags/delete/{tag}','BlogController@tagDelete')->name('deleteArticleTag');
    Route::post('blogs/tags/update/{tag}','BlogController@tagUpdate')->name('updateArticleTag');
    Route::post('banners/create','BannerController@create')->name('createBanner');
    Route::post('banners/delete/{banner}','BannerController@bannerDelete')->name('deleteBanner');
    Route::post('banners/update/{banner}','BannerController@bannerUpdate')->name('updateBanner');
});
