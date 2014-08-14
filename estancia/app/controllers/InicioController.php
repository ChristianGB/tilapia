<?php 
class InicioController extends BaseController {
    	public function mostrarNoticia(){
			try{
			$noticia = DB::table('contenido')->where('Tipo','=',1)->get();
			$recetario = DB::table('recetario')->get();
			
			}catch(ErrorException $e){}
			
			return View::make('ini')->with('noticia', $noticia)->with('recetario',$recetario);
		
			
		}
		public function mostrarBolsa(){
			try{
			$trabajo = DB::table('contenido')->where('Tipo','=',2)->get();
			}catch(ErrorException $e){}
			
			return View::make('bolsa')->with('trabajo', $trabajo);
		}
		
 
}
?>