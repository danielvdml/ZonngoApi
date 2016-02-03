<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get("/",function(){
	return "Api de zonngo";
});
Route::resource("Categoria","EC\CategoriaController",["only"=>["index","show"]]);	
Route::resource("Categoria.Modelo","EC\CategoriaModeloController",["only"=>["index","show"]]);	
Route::resource("Marca","EC\MarcaController",["only"=>["index","show"]]);	
Route::resource("Marca.Modelo","EC\MarcaModeloController",["only"=>["index","show"]]);	
Route::resource("Modelo","EC\ModeloController",["only"=>["index","show"]]);	
Route::resource("Modelo.Estadistica","EC\ModeloEstadisticaController",["only"=>["index","show"]]);	
Route::resource("Modelo.Articulo","EC\ModeloArticuloController",["only"=>["index","show"]]);	
Route::resource("Articulo","EC\ArticuloController",["only"=>["index","show"]]);	


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
