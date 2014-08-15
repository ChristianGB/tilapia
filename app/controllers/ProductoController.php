<?php  

/**
* 
*/
class ProductoController extends BaseController
{

	public function getProductos(){
		
		$productos=DB::table('articulos')->get();
		$var="hola";
 return View::make('inicio')->with('arreglo', $productos);
		
	}
}
?>