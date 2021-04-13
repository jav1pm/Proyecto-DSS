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
    return view('welcome');
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////RUTAS DEL CRUD DE USUARIO ////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/user', 'UserController@showAll')->name('users.showAll');

Route::get('/user/createuser' , 'UserController@createUser');

Route::get('/user/{id}/edit' , 'UserController@editUser')->name('users.editUser');

Route::patch('/user/{user}', 'UserController@updateUser')->name('users.updateUser');

Route::post('/user', 'UserController@storeUsers')->name('users.storeUsers');

Route::get('/user/{user}/delete', 'UserController@deleteUser')->name('users.deleteUser');

Route::get('/user/{id}', 'UserController@showUser');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////// RUTAS DEL CRUD DE PRODUCTO ////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/product', 'ProductController@showAll')->name('products.showProducts');

Route::get('/product/createproduct' , 'ProductController@createProduct');

Route::post('/product', 'ProductController@storeProducts')->name('products.storeProducts');

Route::get('/product/{id}/editproduct', 'ProductController@editProduct')->name('products.editProduct');

Route::patch('/product/{product}', 'ProductController@updateProduct')->name('products.updateProduct');

Route::get('/product/{product}/delete', 'ProductController@deleteProduct')->name('products.deleteProduct');

Route::get('/product/{id}', 'ProductController@showProduct');


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////// RUTAS DEL CRUD DE PEDIDO ////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/order', 'OrderController@showAll');

Route::get('/order/{id}', 'OrderController@showOrder');

Route::get('/orderline', 'OrderLineController@showAll');

Route::get('/orderline/{id}', 'OrderLineController@showOrderLine');

Route::get('/category', 'CategoryController@showAll');

Route::get('/category/{id}', 'CategoryController@showCategory');


