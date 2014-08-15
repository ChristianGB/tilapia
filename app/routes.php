<?php

Route::get('/', 'InicioController@mostrarNoticia');

Route::get('/bolsa-de-trabajo', 'InicioController@mostrarBolsa');

Route::get('/nosotros', 'NosotrosController@mostrarNosotros');
Route::get('productos','ProductoController@getProductos');
Route::get('rse','RseController@ProgramasRse');
Route::get('prueba',function()
{
	return View::make('mostrarprueba');
});