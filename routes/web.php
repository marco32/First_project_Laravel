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
// Index
Route::get('/','AdminController@getIndex');

// Customers
Route::get('/customers','CustomerController@getCustomers');
Route::get('/customers/{id}','CustomerController@getUniqueCustomer');
Route::post('/updateCustomer/{id}','CustomerController@updateCustomer');
Route::get('/add_customer','CustomerController@addnewCustomer');
Route::post('/addCustomer','CustomerController@addCustomer');
Route::post('/deletecustomer/{id}','CustomerController@deleteCustomer');

// Products
Route::get('/products','ProductController@getProducts');
Route::get('/products/{id}','ProductController@getUniqueProduct');
Route::post('/updateProduct/{id}','ProductController@updateProduct');
Route::get('/add_product','ProductController@addnewProduct');
Route::post('/addProduct','ProductController@addProduct');
Route::post('/deleteproduct/{id}','ProductController@deleteProduct');

// Groups
Route::get('/groups','GroupController@getGroups');
Route::get('/groups/{id}','GroupController@getUniqueGroup');
Route::post('/updateGroup/{id}','GroupController@updateGroup');
Route::get('/add_group','GroupController@addnewGroup');
Route::post('/addGroup','GroupController@addGroup');
Route::post('/deletegroup/{id}','GroupController@deleteGroup');

// Products belong Groups
Route::get('/products_belong_groups','Product_belong_groupController@getProducts_belong_groups');
Route::get('/products_belong_groups/{id}','Product_belong_groupController@getUniqueProduct_belong_group');
Route::post('/updateProduct_belong_group/{id}','Product_belong_groupController@updateProduct_belong_group');
Route::get('/add_products_belong_groups','Product_belong_groupController@addnewProduct_belong_group');
Route::post('/addProduct_belong_group','Product_belong_groupController@addProduct_belong_group');
Route::post('/deleteproduct_belong_group/{id}','Product_belong_groupController@deleteProduct_belong_group');