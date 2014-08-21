<?php

Route::get('/', 'InicioController@mostrarNoticia');

Route::get('/bolsa', 'InicioController@mostrarBolsa');

Route::get('/nosotros', 'NosotrosController@mostrarNosotros');

Route::get('/formulario-noticia', function()
{
	return View::make('formNoticias');
});

Route::get('productos','ProductoController@getProductos');
Route::get('rse','RseController@ProgramasRse');
Route::get('prueba',function()
{
	return View::make('mostrarprueba');
});

Route::post('formulario-noticia','FormularioController@formularioNoticia');

//Route::get('formulario-noticia','FormularioController@mostrarNoticia');

Route::get('/contacto', 'ContactoController@formularioContacto');
