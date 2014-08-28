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

Route::post('formulario','FormularioController@formularioNoticia');
Route::post('formulario','FormularioController@formularioPuesto');

Route::get('formulario-noticia','FormularioController@formularioPuesto');

Route::get('/galeria1', 'GaleriaController@galeria');


Route::get('/contacto', 'ContactoController@formularioContacto');


Route::get("programadd", function(){
    return View::make("AgregarProgramas");
});

Route::get("edicion", function(){
    return View::make("PanelEdicion");
});

Route::get("test/{id?}",'InformationController@ajaxrequest');
Route::get("edicionA",'SendContentController@getProgramas');
Route::post("insercion","AddProductController@AddnewItem");
Route::post("addProgram","RseEditionController@AddnewProgram");
Route::post("addProgram","RseEditionController@AddnewEvent");
Route::get("eliminar/{id?}","EliminarController@destroy");


// route to show the login form
Route::get('login', array('uses' => 'LoginController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'LoginController@doLogin'));
Route::post('edicionA',function(){
	if(Request::ajax()){
		var_dump(Input::all());
	return 'ajax lol tehre';
	}
});
