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

Route::get('/user/filter/{name}','UserController@showUserByName');

Route::get('/user/{id}', 'UserController@showUser');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////// RUTAS DEL CRUD DE PRODUCTO //////////////////////////////////////////////////////
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


Route::get('/order', 'OrderController@showAll')->name('orders.showOrders');

Route::get('/order/createorder', 'OrderController@createOrder');

Route::post('/order','OrderController@storeOrder')->name('orders.storeOrder');

Route::get('/order/{id}/editorder','OrderController@editOrder')->name('orders.editOrder');

Route::patch('/order/{order}','OrderController@updateOrder')->name('orders.updateOrder');

Route::get('/order/{order}/delete', 'OrderController@deleteOrder')->name('orders.deleteOrder');

Route::get('/order/{id}', 'OrderController@showOrder');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////// RUTAS DEL CRUD DE LINEA DE PEDIDO ///////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/orderlines', 'OrderlineController@showAll')->name('orderlines.showOrderlines');

Route::get('/orderlines/{id}/delete','OrderlineController@deleteOrderline');

Route::get('/orderline/{id}', 'OrderlineController@showOrderLine');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////// RUTAS DEL CRUD DE CATEGORIA /////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/category', 'CategoryController@showAll')->name('categories.showCategories');

Route::get('/category/{id}/delete','CategoryController@deleteCategory') -> name('categories.deleteCategory');

Route::get('/category/{id}', 'CategoryController@showCategory');



