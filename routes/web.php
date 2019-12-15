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

// Route::get('/', function () {
    // return view('welcome');
// });
    Route::get('/', 'Frontend\HomeController@index');
// dd(URL::to('/'));
Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('clear', function() {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    dd('cleared');
});

/******************ADMIN********************/

Route::prefix('admin')->group(function() {

    /* Adding actions */   
    Route::resource('category', 'Admin\CategoriesController');
    Route::resource('admincategory', 'CategoriesController');
    Route::resource('subcategory', 'Admin\SubCategoriesController');
    
    /* Admin actions */
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    /* Admin dashboard */
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');


    Route::get('/customers', 'Admin\CustomersController@index')->name('admin.customers');
    Route::get('/sellers', 'Admin\SellersController@index')->name('admin.sellers');
    Route::get('/orders', 'Admin\OrdersController@index')->name('admin.orders');    
    Route::get('/contentmanagement', 'Admin\ContentManagementController@index')->name('admin.contentmanagement');
    Route::get('/couponcodes', 'Admin\CouponCodesController@index')->name('admin.couponcodes');
    Route::get('/messages', 'Admin\MessagesController@index')->name('admin.messages');
    Route::get('/roles', 'Admin\RolesController@index')->name('admin.roles');
    Route::get('/searchkeywords', 'Admin\SearchKeyWordsController@index')->name('admin.searchkeywords');
    Route::get('/settings', 'Admin\SettingsController@index')->name('admin.settings');

    /* Admin categories */
    Route::get('/categories', 'Admin\CategoriesController@index')->name('admin.categories');    
    Route::get('/categories/createcategory', 'Admin\CategoriesController@create')->name('admin.categories.createcategory');
    Route::post('/categories', 'Admin\CategoriesController@store')->name('admin.categories');          
    Route::get('/categories/edit/{id}', [
            'uses' => 'Admin\CategoriesController@edit'
            ])->name('admin.category.edit');
    Route::post('/categories/active/{id}','Admin\CategoriesController@active')->name('categories.active');
    Route::post('/categories/inactive/{id}','Admin\CategoriesController@inactive')->name('categories.inactive');
        
  
  
     /* Admin Subcategories */
    Route::get('/subcategories', 'Admin\SubCategoriesController@index')->name('admin.subcategories'); 
    Route::get('subcategories/destroy/{id}', 'Admin\SubCategoriesController@destroy')->name('admin.subcategories.destroy'); 
    Route::get('subcategories/edit/{id}', 'Admin\SubCategoriesController@edit')->name('admin.subcategories.edit'); 
    Route::post('subcategories/update/{id}', 'Admin\SubCategoriesController@update')->name('admin.subcategories.update'); 
    Route::get('subcategories/status/{id}', 'Admin\SubCategoriesController@status')->name('admin.subcategories.status'); 
    
    Route::post('getLableData', 'Admin\SubCategoriesController@getLableData')->name('admin.getLableData'); 

     /* Admin Categories Label */
    Route::get('/label', 'Admin\LabelController@index')->name('admin.labelcategories');
    Route::get('/categories/createlabelcategory', 'Admin\LabelController@create')->name('admin.labelcategories.createcategory');
    Route::post('/labelstore', 'Admin\LabelController@store')->name('admin.labelcategories.create'); 

});


// Route::group(['namespace' =>'Frontend', 'middleware' => ['auth:web']], function(){
    Route::get('/profile', 'HomeController@profile')->name('profile'); 
    Route::post('/profile', 'HomeController@UpdateProfile'); 
// });

Route::get('/category','Frontend\CategoryController@index');
