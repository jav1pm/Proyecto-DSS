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
Route::get('/user', 'UserController@showAll');
//Devuelve un usuario con un id especifico
Route::get('/user/{id}', 'UserController@showUser');
//Llamada a la vista para añadir usuarios
Route::get('/user/signup',function() {

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

});

Route::get('/product', 'ProductController@showAll');


