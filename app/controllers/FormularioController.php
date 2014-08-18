<?php
class FormularioController extends BaseController {
	//public function mostrarFormulario(){
	//	return View::make('formulario_noticias');
	//}
 public function noticias()
    {
		return View::make('formulario_noticias');
        //obtenemos los campos del formulario con Input::get('nombrecampo') 
        //y con e los limpiamos para guadarlos en la base de datos
        $titulo = e(Input::get('titulo'));
        $descripcion = e(Input::get('descripcion'));
        $imagen = e(Input::get('imagen'));
		//$tipo = e(Input::get('tipo'));
		
 
        //creamos un array con las reglas que deben cumplir nuestro formulario
        $rules = array(
            'titulo' => 'required|min:2|max:100',
            'descripcion' => 'required|min:2|max:1500',
			//'tipo' => '1';
            'imagen' => 'required|min:4|max:100'
        );
 
        //personalizamos los mensajes de error para nuestro formualario
        $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
            
        );
 
        //validation necesita los campos, las reglas y opcionalmente los mensajes,
        //si no le pasamos los mensajes los pondrá en inglés, que son los que vienen
        //por defecto con laravel
        $validation = Validator::make(Input::all(), $rules, $messages);
 
        //si la validación falla redirigimos a formularios con los errores
        //y los campos que haya ingresado el usuario para que queden grabados
        if ($validation->fails())
        {
 
            return Redirect::to('formulario_noticias')->with_errors($validation)->with_input();
 
        //en otro caso llamamos al método insert_users de la clase usuarios para
        //ingresar al usuario en la tabla usuarios
        }
		else{
            $insert = DB::table('contenido')->insert(array('Titulo' => $titulo,'Descripcion'  => $descripcion,'Imagen' => $imagen));
            if($insert)
            {
 
              return Redirect::to('formulario_noticias')->with('mensaje','¡Noticia registrada correctamente!.');
 
            }
 
        }
 
    }
 
}	







