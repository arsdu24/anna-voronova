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
Route::group(['middleware'=>'auth'], function(){
    Route::get('/','\App\Http\Controllers\HomeController@index')->middleware('guest')->name('home');
    Route::get('/client', 'ClientController@index')->middleware('client')->name('client');
    Route::get('/products','ProductsController@clientViewAll')->middleware('client')->name('productsView');
    Route::get('/checkout','\App\Http\Controllers\OrdersController@showForm');
    Route::get('/cart','OrdersController@index')->name('cart');
    Route::get('/collections','CollectionsController@clientViewAll')->name('collectionsList');
    Route::get('/collections/{collection}','CollectionsController@collectionShow')->name('collectionShow');
    Route::get('/products/{id}','ProductsController@clientProductPage')->middleware('client')->name('productView');
    Route::get('/search','SearchController@search')->name('search');
    Route::get('/contact-us','ContactUsController@index')->name('contactus');

    Route::post('/cart/add','OrdersController@addToCart')->middleware('client')->name('addToCart');
    Route::post('/checkout','\App\Http\Controllers\OrdersController@createOrder')->name('create_order');
    Route::post('cart/delete','OrdersController@ItemDelete')->name('cartItemDelete');
    Route::post('cart/qty_update','OrdersController@qtyUpdate')->name('qtyUpdate');
    Route::post('products/review','ReviewController@createReview')->name('createReview');
    Route::post('/send-email','ContactUsController@sendEmail')->name('sendEmail');
    Route::post('/add-address','AddressesController@CreateAddress')->name('CreateAddress');
    Route::post('/delete-address/{address}','AddressesController@DeleteAddress')->name('DeleteAddress');
    Route::post('/set-order-address','AddressesController@SetAddress')->name('SetAddress');
    //Blog routes
    Route::get('/blog','BlogController@index')->name('blogs');
    Route::get('/blog/article/{article}','BlogController@blogPage')->name(' blogPage');
    Route::get('/blog/tag/{slug}','BlogController@Tagged')->name('TaggedPage');
    Route::get('/blog/category/{category}','BlogController@categoryShow')->name('categoryShow');


    Auth::routes();
    Route::get('/login','\App\Http\Controllers\Auth\LoginController@showLoginForm');
    Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm');
    Route::get('/confirm-password', 'Auth\ForgotPasswordController@ForgotPassword')->middleware('guest')->name('password.request');
    Route::get('/reset-password', 'Auth\ForgotPasswordController@EmailForm')->middleware('guest')->name('password.emailForm');
    Route::get('/password/reset/{token}','Auth\ForgotPasswordController@PasswordResetForm')->middleware('guest')->name('password.reset');

    Route::post('/reset-password','Auth\ForgotPasswordController@PasswordUpdate')->middleware('guest')->name('password.update');
    Route::post('/verify-email','Auth\ForgotPasswordController@EmailVerify')->name('password.email');
    Route::post('/register/client', 'Auth\RegisterController@createClient');
    Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login')->name('login');
});
//    Admin panel routes
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('product-list','ProductsController@viewList')->name('productList');
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('product-list/{id}','ProductsController@productPage')->name('productPage');
    Route::get('collections-list','CollectionsController@viewList')->name('collectionsList');
    Route::get('collections-list/{collection}','CollectionsController@collectionPage')->name('collectionPage');
    Route::get('orders-list','OrdersController@viewList')->name('ordersList');
    Route::get('orders-list/{order}','OrdersController@orderPage')->name('orderPage');
    Route::get('blog','BlogController@admin_blogs')->name('admin_blogs');
    Route::get('blog/{article}','BlogController@article_update_page')->name('admin_article');
    Route::get('blog/categories/all','BlogController@categoriesList')->name('articleCategories');
    Route::get('blog/tags/all','BlogController@tagsList')->name('articleTags');
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
    Route::post('product/might-like',"ProductsController@mightLike")->name('ml_set');
    Route::post('product/might-like/add',"ProductsController@mightLikeAdd")->name('ml_add');
    Route::post('product/might-like/delete',"ProductsController@mightLikeDelete")->name('ml_delete');
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
    Route::post('products-list/in-menu','ProductsController@InMenu')->name('InMenu');
    Route::post('products-list/down-from-menu','ProductsController@downFromMenu')->name('downFromMenu');
    Route::post('collection-list/in-menu','CollectionsController@InMenu')->name('InMenuCollection');
    Route::post('collection-list/down-from-menu','CollectionsController@downFromMenu')->name('downFromMenuCollection');
    Route::post('categories-list/in-menu','ProductsController@InMenuCategory')->name('InMenuCategory');
    Route::post('categories-list/down-from-menu','ProductsController@downFromMenuCategory')->name('downFromMenuCategory');
    Route::post('blog-image-update','BlogController@blogImage')->name('blog-image-set');
});
