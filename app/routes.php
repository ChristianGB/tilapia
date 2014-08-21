<?php

Route::get('/', 'InicioController@mostrarNoticia');

Route::get('/bolsa', 'InicioController@mostrarBolsa');

Route::get('/nosotros', 'NosotrosController@mostrarNosotros');

Route::get('/formulario-noticia', 'FormularioController@noticias');




Route::get('productos','ProductoController@getProductos');
Route::get('rse','RseController@ProgramasRse');
Route::get('prueba',function()
{
	return View::make('mostrarprueba');
});
