<?php  

class RseEditionController extends BaseController
{
	
	public function AddnewProgram(){

		$Titulo =$_POST["Titulo"];
		$Descripcion =$_POST["Descripcion"];
		$Categoria =$_POST["Categoria"];
		$Archivo=$_FILES["Imagen"]["name"];
		$Dir='imagenes\\\Programas\\'.$Archivo;
		try{
			
                 
			$id =DB::table('contenido')->insertGetId(array(

			'Titulo'=>$Titulo,
			'Descripcion'=>$Descripcion,
			'Categoria'=>$Categoria,
			'Imagen'=>$Dir,
			'Tipo'=>3
			)
		);
			  	Input::file('Imagen')
               ->move("imagenes\Programas",$Archivo);  
			return Redirect::to("formulario");
		}
		catch(ErrorException $e)
		{
			return View::make("formulario")->with('notice','programa agregado correctamente');
		}
		
		
	}


	public function AddnewEvent(){

		$Titulo =$_POST["Titulo"];
		$Descripcion =$_POST["Descripcion"];
		$Lugar =$_POST["Lugar"];
		$Archivo=$_FILES["Imagen"]["name"];
		$Fecha=$_POST["Anio"]."-".$_POST["Mes"]."-".$_POST["Dia"];


		$Dir='imagenes\\\Eventos\\'.$Archivo;
		try{
			
                 
			$id =DB::table('contenido')->insertGetId(array(

			'Titulo'=>$Titulo,
			'Descripcion'=>$Descripcion,
			'Lugar'=>$Lugar,
			'Fecha'=>$Fecha,
			'Imagen'=>$Dir,
			'Tipo'=>4
			)
		);
			  	Input::file('Imagen')
               ->move("imagenes\Eventos",$Archivo);  
			return Redirect::to("formulario");
		}
		catch(ErrorException $e)
		{
			return View::make("formulario")->with('notice','programa agregado correctamente');
		}
		
		echo $Fecha;
	}

}
?>