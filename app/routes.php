<?php

Route::get('/', 'InicioController@mostrarNoticia');

Route::get('/bolsa', 'InicioController@mostrarBolsa');

Route::get('/nosotros', 'NosotrosController@mostrarNosotros');

Route::get('/formulario', function()
{
	return View::make('formulario');
});

Route::get('productos','ProductoController@getProductos');
Route::get('rse','RseController@ProgramasRse');
Route::get('prueba',function()
{
	return View::make('mostrarprueba');
});

Route::get('/galeria',function()
{
	return View::make('album');
});


Route::get('/galeria1',function()
{
	return View::make('galeria1');
});

Route::post('formulario-noticia','FormularioController@formularioNoticia');

//Route::get('formulario-noticia','FormularioController@mostrarNoticia');

Route::get('/contacto', 'ContactoController@formularioContacto');
