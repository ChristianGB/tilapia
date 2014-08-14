<?php 
class NosotrosController extends BaseController {
    	public function mostrarNosotros(){
			try{
			$directorio = DB::table('directorio')->get();
			
			
			}catch(ErrorException $e){}
			
			return View::make('nosotros')->with('directorio', $directorio);
		
			
		}
		
		
 
}
?>