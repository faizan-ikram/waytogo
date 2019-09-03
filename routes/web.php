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



//Auth::routes();



//Auth::routes();

Auth::routes();


Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/offers', 'HomeController@offer')->name('offer');
Route::get('/companies', 'HomeController@companies')->name('companies');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::prefix('admin')->group(function() {



    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@Login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');


});

Route::prefix('company')->group(function() {



    Route::get('/login','Auth\CompanyLoginController@showLoginForm')->name('company.login');
    Route::post('/login','Auth\CompanyLoginController@Login')->name('company.login.submit');
    Route::get('/', 'CompanyController@index')->name('company.dashboard');


});

Route::resource('Travel','TravelController')->middleware('auth:admin');
Route::resource('User','UserController')->middleware('auth:admin');

Route::resource('Tour','TourController')->middleware('auth:company');
Route::post('/search','HomeController@search');
Route::post('/search2/{comp_id}','HomeController@search2');
Route::get('/Book/{tour_id}', 'HomeController@Booking');


Route::get('Logout','AdminController@getLogout')->name('Logout');
Route::get('C_Logout','CompanyController@getLogout')->name('C_Logout');
Route::get('U_Logout','HomeController@getLogout')->name('U_Logout');
Route::get('/DashBoard', 'HomeController@dashboard')->name('Bookings')->middleware('auth:web');

Route::post('/Book/{tour_id}', 'BookController@Booking');
Route::get('/destroy/{tour_id}', 'BookController@destroy');

Route::get('/description','AdminController@index1')->middleware('auth:admin');

Route::post('/edit_description','AdminController@edit');
Route::get('/offers2/{tour_id}', 'HomeController@offer2')->name('offers');

Route::get('/offers3/{comp_id}', 'HomeController@offer3')->name('Offers');
Route::post('/u_image','HomeController@upload_image')->middleware('auth:web');
Route::resource('Contact','ContactController')->middleware('auth:company');
Route::post('send_message/{id}','ContactController@add')->middleware('auth:web');
Route::post('send_message_admin','ContactAdminController@add')->middleware('auth:web');
Route::resource('ContactAdmin','ContactAdminController')->middleware('auth:admin');