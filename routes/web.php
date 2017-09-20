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

Route::get('/home', 'ListarController@listar')->name('home');

Route::get('/post/{id}', 'PosteoController@ver')->name('post');

Route::get('/contacto', 'ContactoController@contacto')->name('contacto');

Route::match(['get', 'post'], '/new_post', 'NuevoPostController@crear')->name('new_post');

Route::match(['get', 'post'], '/editar', 'EditarPostController@editar')->name('editar');


