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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/clientes', 'ClientesController');

/*Route::get('/inicio','Clientes@index');
Route::get('/crear','Clientes@create');
Route::get('/ver','Clientes@show');*/

/*Route::get('/leer',function(){
    $clientes= App\Cliente::all();
    foreach($clientes as $cli){
        echo $cli -> nombrecliente;
    }
});*/

