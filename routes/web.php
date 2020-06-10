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

Route::group(['middleware' => [],'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.app');
    })->name('home');

	Route::group(['prefix' => 'text-editor'], function () {
        // Route::get('/list', 'Web\TextEditorController@index')->name('texteditor.index');
        // Route::get('/detail', 'Web\TextEditorController@detail')->name('texteditor.detail');
        Route::get('/create', 'Web\TextEditorController@create')->name('admin.texteditor.create');
        // Route::post('/update', 'Web\TextEditorController@update')->name('texteditor.update');
        // Route::post('/delete', 'Web\TextEditorController@delete')->name('texteditor.delete');
        // Route::get('/search', 'Web\TextEditorController@search')->name('texteditor.search');
    });
});

Route::group([], function () {
    Route::group([], function () {
        Route::get('/', 'Online\IndexController@index')->name('online-home');
    });
    Route::get('user/', 'Online\IndexController@getUser')->name('get-user');
    Route::group(['prefix' => 'shop'], function () {
        Route::get('/', 'Online\ShopController@index')->name('online.shop.index');
        // Route::get('/detail', 'Online\ShopController@quickDetail')->name('online.shop.quickDetail');
        Route::get('/detail/{id?}', 'Online\ShopController@quickDetail')->name('ajax.shop.detail');
        Route::get('/category/detail/{id?}', 'Online\ShopController@quickDetail')->name('ajax.shop.detail');
        Route::get('/category/{id?}', 'Online\ShopController@productByCategory')->name('online.shop.productByCategory');
        Route::get('/landing/{id?}', 'Online\ShopController@landingDetail')->name('online.shop.landingDetail');
//        test comment
    });
    // Route::group(['prefix' => 'price'], function(){
    //     Route::get('/', 'Blog\PriceController@index')->name('blog.price.index');
    // });
    // Route::group(['prefix' => 'pay'], function(){
    //     Route::get('/', 'Blog\PriceController@index')->name('blog.pay.index');
    // });
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'Online\BlogController@index')->name('online.blog.index');
        Route::get('/menu/{id?}', 'Online\BlogController@menu')->name('online.blog.menu');
        Route::get('/news/{id?}', 'Online\BlogController@news')->name('online.blog.news');
        Route::get('/author/{id?}', 'Online\BlogController@author')->name('online.blog.author');
        Route::get('/tag/{id}', 'Online\BlogController@tag')->name('online.blog.tag');
    });
    Route::get('/account', 'Auth\AccountController@profileUser')->name('pay');
    Route::post('/account', 'Auth\AccountController@pay')->name('pay');
    Route::get('/account/profile', 'Auth\AccountController@profileUser')->name('profileUser');
    Route::get('/account/payment', 'Auth\AccountController@payUser')->name('paymentUser');
    Route::post('/account/payment', 'Auth\AccountController@pay')->name('paymentUser');


    Route::get('/login', 'Auth\LoginController@redirectLogin')->name('login')->middleware('guest');
    Route::post('/login', 'Auth\LoginController@login')->name('post-login');

    Route::get('/register', 'Auth\RegisterController@redirectRegister')->name('register');
    Route::post('/register', 'Auth\RegisterController@register')->name('post-register');

    Route::get('/logout', 'Auth\LoginController@logout')->name('do-logout');
    Route::get('/checkLoginSPM', 'Auth\LoginController@checkLoginSPM')->name('checkLoginSPM');
    Route::get('/loignfacebook', 'Auth\LoginController@checkLoginFaceBook')->name('login-facebook');

   Route::get('/url-callback', 'Auth\LoginController@urlCallback')->name('urlCallback');

});


