<?php 
class GaleriaController extends BaseController {
    	public function galeria(){
		
			try{
			$galeria1 = DB::table('galeria')->where('idAlbum','=',1)->get();
			}catch(ErrorException $e){}
			return View::make('galeria1')->with('galeria1', $galeria1);	
		} 
}
?>