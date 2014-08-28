<?php 
class GaleriaController extends BaseController {
    	public function galeria($id){
		$album = $id;
			try{
			$galeria1 = DB::table('galeria')->where('idAlbum','=',$album)->get();
			}catch(ErrorException $e){}
			return View::make('galeria1')->with('galeria1', $galeria1);	
		}

		public function album(){
		
			try{
			$album1 = DB::table('album')->get();
			$imagen = DB::table('galeria')->first(array('Imagen'));
			
			}catch(ErrorException $e){}
			return View::make('album')->with('album1', $album1)->with('imagen', $imagen);	
		} 
}
?>