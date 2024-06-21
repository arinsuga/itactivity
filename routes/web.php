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

Route::group(['middleware'=>'lang'],function ()
{
    
//Change Language
Route::get('changelang/{lang}', function($lang){

    $setLang = 'en';
    if ( ($lang == null) || ($lang == '') ) {
        $setLang = 'en';
    } elseif ($lang == 'en') {
        $setLang = 'id';
    } else {
        $setLang = 'en';
    }

    \Session::put('lang',$setLang);

    return redirect()->back();
})->name('change.lang');

    //your translation routes
//Website routes
Route::get('/notuse', 'WebsiteController@index')->name('website.index');
Route::get('/about', 'WebsiteController@about')->name('website.about');
Route::get('/about1', 'WebsiteController@about1')->name('website.about1');
Route::get('/about2', 'WebsiteController@about2')->name('website.about2');
Route::get('/about3', 'WebsiteController@about3')->name('website.about3');

Route::get('/product', 'WebsiteController@product')->name('website.product');
Route::get('/product-info/{id}', 'WebsiteController@productInfo')->name('website.productInfo');
Route::get('/product-list/{producttype_id}/{productsubtype_id}', 'WebsiteController@productList')->name('website.productList');

Route::get('/branch', 'WebsiteController@branch')->name('website.branch');

Route::get('/event', 'WebsiteController@event')->name('website.event');
Route::get('/news-list', 'WebsiteController@newsList')->name('website.newsList');
Route::get('/news/{id}', 'WebsiteController@newsShow')->name('website.newsShow');

Route::get('/contact', 'WebsiteController@contact')->name('website.contact');
Route::post('/contact', 'ContactFormController@store')->name('website.contact.store');

Route::get('/shop', 'WebsiteController@shop')->name('website.shop');
});


//event
//Route::resource('contact-form', 'ContactFormController');

//Default laravel welcome route
Route::get('/welcome', function () {
    return view('welcome');
});

//Default laravel home route
Route::get('/home', 'HomeController@index')->name('home');

//Default laravel auth route
Auth::routes();

