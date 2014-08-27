<?php  

class AddProductController extends BaseController
{
	
	public function AddnewItem(){

		$Titulo =$_POST["producto"];
		$Descripcion =$_POST["Descripcion"];
		$Presentaciones =$_POST["Presentaciones"];
		$Codigo =$_POST["Codigo"];
		$Archivo=$_FILES["Imagen"]["name"];
		$slash=
		$Dir='imagenes\\\Producto\\'.$Archivo;
		try{
			
                 
			$id =DB::table('articulos')->insertGetId(array(

			'Titulo'=>$Titulo,
			'Descripcion'=>$Descripcion,
			'Presentaciones'=>$Presentaciones,
			'Codigo'=>$Codigo,
			'Imagen'=>$Dir
			)
		);
			Input::file('Imagen')
            ->move("imagenes\Producto",$Archivo);    
			return Redirect::to("prueba");
		}
		catch(ErrorException $e)
		{
			return View::make("prueba");
		}
		
		
	}
}
?>