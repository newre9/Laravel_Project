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

Route::get("/verify_token/{token}","HomePage@verify_token");
Route::get('/', 'HomePage@index');

Auth::routes(['verify'=> true]);




// locale Route


Route::get('/en', 'LanguageController@langen')->name('en');
Route::get('/tr', 'LanguageController@langtr')->name('tr');
Route::get('/adminpage','AdminController@adminpage')->name('adminpage');
//Route::get('/admin','HomeController@index')->name('admin');
Route::get('/about', 'Team@about')->name('about');

Route::get('/veen', 'Team@veen')->name('veen');
Route::get('/tevfik', 'Team@tevfik')->name('tevfik');
Route::get('/Gbenga', 'Team@Gbenga')->name('Gbenga');
Route::get('/Anna', 'Team@Anna')->name('Anna');
Route::get('/Naham', 'Team@Naham')->name('Naham');
Route::get('/Translate', 'Team@Translate')->name('Translate');
Route::get('/Editing', 'Team@Editing')->name('Editing');
Route::get('/privacypolicy', 'Team@privacypolicy')->name('privacypolicy');
Route::get('/index', 'UserController@index');
Route::get('/admin/all', 'UserController@showAll')->name('admin/all');
Route::get('/admin/admins', 'UserController@showAdmins')->name('admin/admins');
Route::get('/admin/users', 'UserController@showUsers')->name('admin/users');
Route::get('/users/view/{id}', 'UserController@ViewUser')->name('viewuser');
Route::post('/users/delete/{id}', 'UserController@DeleteUser')->name('deleteuser');
Route::post('/users/update/{id}', 'UserController@update')->name('updateuser');
Route::get('/users/create', 'UserController@create')->name('createuser');



Route::get('/userpanel', 'UserpanelController@index')->name('userpanel');
Route::get('/home', 'UserpanelController@index')->name('home');
Route::get('/user/profile/{id}', 'UserpanelController@profile')->name('customerprofile');
Route::get('/user/edit-profile/{id}', 'UserpanelController@editpanel')->name('editprofile');
Route::post('/user/edit/{id}', 'UserpanelController@updates')->name('customerupdate');
Route::get('/user/order/view/{id}', 'UserpanelController@show')->name('vieworderpanel');



Route::get('/manuscript/services', 'ServicesController@manuscript')->name('edit/services');
Route::get('/user/services/translate/pay', 'ServicesController@pay')->name('user/services/translate/pay');
Route::get('/translate/services', 'ServicesController@translate')->name('translate/services');


Route::get('/contact-us', 'ContactUsController@message');
Route::post('/contact-us','ContactUsController@contactSaveData');
Route::get('/contactus/view/{id}', 'ContactUsController@show')->name('messagesview');
Route::post('/contactus/delete/{id}', 'ContactUsController@DeleteMessage')->name('deletemessage');



Route::get('/orders/user', 'OrdersController@sparis')->name('sparis');
Route::get('/orders/all', 'OrdersController@showAll')->name('admin/all');
Route::get('/orders/new', 'OrdersController@new_orders')->name('neworders');
Route::get('/orders/prepare', 'OrdersController@prepare_orders')->name('neworders');
Route::get('/orders/completed', 'OrdersController@completed_orders')->name('completedorders');
Route::get('/orders/cancelled', 'OrdersController@cancelled_orders')->name('cancelledorders');
Route::get('/orders/view/{id}', 'OrdersController@show')->name('orderview');
Route::post('/orders/update/{id}', 'OrdersController@update')->name('update');
Route::get('/file/download/{file}', 'OrdersController@downloadfile')->name('downloadfile');
Route::get('/pay/detay/{id}', 'OrdersController@pay')->name('paydetail');
Route::resource('Orders', 'OrdersController');


Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Auth::routes();

