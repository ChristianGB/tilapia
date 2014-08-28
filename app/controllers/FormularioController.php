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
		return Redirect::to('formulario')->with('mensaje', $mensaje1);
		}
		
		catch(ErrorException $e){
			return View::make('formulario')->with('mensaje', $error);
		}	
	}
	
	
	public function formularioPuesto(){
		$titulo= $_POST["Titulo"];
		$descripcion= $_POST["Descripcion"];
		
		$tipo=2;
		$mensaje1='datos almacenados';
		$error='datos incorrectos';
		try{
		 $bd = DB::table('contenido')->insertGetId(array(
			'Titulo'=>$titulo,
			'Descripcion'=>$descripcion,
			
			'Tipo'=>$tipo));
		return Redirect::to('formulario')->with('mensaje', $mensaje1);
		}
		
		catch(ErrorException $e){
			return View::make('formulario')->with('mensaje', $error);
		}		
	}
	
}
	




