<?php
class FormularioController extends BaseController {
	public function formularioNoticia(){
		$titulo= $_POST["Titulo"];
		$descripcion= $_POST["Descripcion"];
		$imagen= $_POST["Imagen"];
		$tipo=1;
		$mensaje1='datos almacenados';
		$error='datos incorrectos';
		try{
		 $bd = DB::table('contenido')->insertGetId(array(
			'Titulo'=>$titulo,
			'Descripcion'=>$descripcion,
			'Imagen'=>$imagen,
			'Tipo'=>$tipo));
		return Redirect::to('formulario-noticia')->with('mensaje', $mensaje1);
		}
		
		catch(ErrorException $e){
			return View::make('formulario-noticia')->with('mensaje', $error);
		}
		
		
		
	}
	
	public function mostrarNoticia(){
		//return array('' => 'Choose a User') + DB::table('contenido')->list('idContenido', 'Titulo');
		
		//$bd2 = DB::table('contenido') ->lists('Titulo', 'idContenido');
		//$combo = array(0 => "Seleccione...") + $bd2;
		//$seleccion = array();
		//return View::make('formulario-noticia', compact('combo','seleccion'));
		
	}
}
	




