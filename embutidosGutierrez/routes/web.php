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

//Rutas user
//Devuelve un listado de usuarios
Route::get('/user', 'UserController@showAll')->name('users.showAll');
//Devuelve un usuario con un id especifico
Route::get('/user/createuser' , 'UserController@createUser');

Route::get('/user/{id}/edit' , 'UserController@editUser')->name('users.editUser');

Route::patch('/user/{user}', 'UserController@updateUser')->name('users.updateUser');

Route::post('/user', 'UserController@storeUsers')->name('users.storeUsers');

Route::get('/user/{user}/delete', 'UserController@deleteUser')->name('users.deleteUser');

Route::get('/user/{id}', 'UserController@showUser');


//Llamada a la vista para añadir usuarios

/*Route::get('/user/signup',function() {

});
//Llamada a la vista para borrar usuarios
Route::get('/user/delete', function() {

});
//Añadimos un usuario
Route::post('/user', function(){

});
//Modificamos un usuario dado un id
Route::put('/user/{id}', function() {

});
//Borramos un usuario
Route::delete('/user', function() {

});*/

Route::get('/product', 'ProductController@showAll');

Route::get('/product/{id}', 'ProductController@showProduct');

Route::get('/order', 'OrderController@showAll');

Route::get('/order/{id}', 'OrderController@showOrder');

Route::get('/orderline', 'OrderLineController@showAll');

Route::get('/orderline/{id}', 'OrderLineController@showOrderLine');

Route::get('/category', 'CategoryController@showAll');

Route::get('/category/{nombre}', 'CategoryController@showCategory');

