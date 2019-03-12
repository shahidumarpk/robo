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

Route::get('/', function () {
    return view('home');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', ['as' => 'dashboard' , function () {
   return view('dashboard');
}])->middleware('auth');


Route::get('/calendar', ['as' => 'calendar' , function () {
   return view('calendar.index');
}])->middleware('auth');


Route::get('/changepassword', ['as' => 'changepassword' , function () {
    return view('changepassword');
 }])->middleware('auth');

 Route::get('/profile', ['as' => 'profile' , function () {
    return view('profile');
 }])->middleware('auth');
//Roles
 Route::get('/roles/deactivate/{id}', 'RoleController@deactivate')->middleware('auth');
 Route::get('/roles/active/{id}', 'RoleController@active')->middleware('auth');
 Route::resource('roles', 'RoleController')->middleware('auth');

 //Sub admins/staff
 Route::get('/resetpassword/{id}', 'UserController@resetPassword')->middleware('auth')->name('resetpassword');
 Route::get('/admins/deactivate/{id}', 'UserController@deactivate')->middleware('auth');
 Route::get('/admins/active/{id}', 'UserController@active')->middleware('auth');
 Route::resource('admins', 'UserController')->middleware('auth');

 //Admin Menu
 Route::get('/menu/deactivate/{id}', 'AdminmenuController@deactivate')->middleware('auth');
 Route::get('/menu/active/{id}', 'AdminmenuController@active')->middleware('auth');
 Route::resource('menu', 'AdminmenuController')->middleware('auth');

 //Customers
 Route::get('/customers/resetpassword/{id}', 'CustomerController@resetPassword')->middleware('auth')->name('customer.resetpassword');
 Route::get('/customers/deactivate/{id}', 'CustomerController@deactivate')->middleware('auth');
 Route::get('/customers/active/{id}', 'CustomerController@active')->middleware('auth');
 Route::resource('customers', 'CustomerController')->middleware('auth');

 //Customers
 Route::get('/sellers/resetpassword/{id}', 'SellerController@resetPassword')->middleware('auth')->name('seller.resetpassword');
 Route::get('/sellers/deactivate/{id}', 'SellerController@deactivate')->middleware('auth');
 Route::get('/sellers/active/{id}', 'SellerController@active')->middleware('auth');
 Route::get('/sellers/pending', 'SellerController@pending')->middleware('auth')->name('seller.pending');
 Route::resource('sellers', 'SellerController')->middleware('auth');

//Category
 Route::resource('categories', 'CategoryController')->middleware('auth');

//Attribue Controller 
Route::resource('attributes', 'AttributeController')->middleware('auth');

 //Products
 Route::resource('products', 'ProductController')->middleware('auth');

  //Orders
  Route::get('orders/messages', 'OrderController@messages')->middleware('auth')->name('order.messages');
  Route::get('orders/conversation', 'OrderController@conversation')->middleware('auth')->name('order.conversation');
  Route::get('orders/createticket', 'OrderController@createticket')->middleware('auth')->name('order.messages');
  Route::resource('orders', 'OrderController')->middleware('auth');

  //Membership
  Route::get('membershipsreports', 'MembershipController@membershipsreports')->middleware('auth')->name('membershipsreports');
  Route::resource('memberships', 'MembershipController')->middleware('auth');

  
  
 // inventory 
 Route::resource('inventory', 'InventoryController')->middleware('auth');

 // invoices
 Route::resource('invoices', 'InvoiceController')->middleware('auth');

 // leads
 Route::resource('lead', 'LeadController')->middleware('auth');
 
 

 // distributors
 Route::resource('/distributors', 'DistributorController')->middleware('auth');

 // settings
 Route::resource('/settings', 'SettingController')->middleware('auth');

 // quotes
 Route::resource('/quotes', 'QuotesController')->middleware('auth');

 // mailbox routes
 Route::get('mail/inbox', 'MailboxController@index')->middleware('auth')->name('mailinbox'); 
 Route::get('mail/read', 'MailboxController@read')->middleware('auth')->name('mailread'); 
 Route::get('mail/compose', 'MailboxController@compose')->middleware('auth')->name('mailcompose'); 

 
