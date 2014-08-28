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

Route::get('/galeria1/{id}', 'GaleriaController@galeria');
Route::get('/galeria', 'GaleriaController@album');

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

Route::post('edicionA',function(){
	if(Request::ajax()){
		var_dump(Input::all());
	return 'ajax lol tehre';
	}
});


// esta sera la ruta principal de nuestra aplicación
// aquí va a estar el formulario para registrase y para inicio de sesión
// esta ruta debe ser publica y por lo tanto no debe llegar el filtro auth
Route::get('login', function(){
    return View::make('login'); 
});
 
// esta ruta sera para crear al usuario 
Route::post('registro', function(){
 
    $input = Input::all();
    
    // al momento de crear el usuario la clave debe ser encriptada
    // para utilizamos la función estática make de la clase Hash
    // esta función encripta el texto para que sea almacenado de manera segura
    $input['password'] = Hash::make($input['password']);
 
    Usuarios::create($input);
 
    return Redirect::to('login')->with('mensaje_registro', 'Usuario Registrado');
});
 
// esta ruta servirá para iniciar la sesión por medio del correo y la clave 
// para esto utilizamos la función estática attemp de la clase Auth
// esta función recibe como parámetro un arreglo con el correo y la clave
Route::post('login', function(){
 
    // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos. 
    if (Auth::attempt( array('correo' => Input::get('correo'), 'password' => Input::get('password') ), true )){
        return Redirect::to('inicio');
    }else{
        return Redirect::to('login')->with('mensaje_login', 'Ingreso invalido');
    }
 
});
 
// Por ultimo crearemos un grupo con el filtro auth. 
// Para todas estas rutas el usuario debe haber iniciado sesión. 
// En caso de que se intente entrar y el usuario haya iniciado session 
// entonces sera redirigido a la ruta login
Route::group(array('before' => 'auth'), function()
{
    
    Route::get('inicio', function(){
        echo 'Bienvenido ';
        
        // Con la función Auth::user() podemos obtener cualquier dato del usuario 
        // que este en la sesión, en este caso usamos su correo y su id
        // Esta función esta disponible en cualquier parte del código
        // siempre y cuando haya un usuario con sesión iniciada
        echo 'Bienvenido '. Auth::user()->correo . ', su Id es: '.Auth::user()->id ;
    });
});
