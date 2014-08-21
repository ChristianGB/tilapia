<?php
Class RseController extends BaseController{
	public function ProgramasRse(){
		try{	
			$ProgramasRse = DB::table('contenido')->where('Tipo','=',3)->get();
			$Eventos = DB::table('contenido')->where('Tipo','=',4)->get();
			$Certificaciones = DB::table('contenido')->where('Tipo','=',5)->get();
			}catch(ErrorException $e){}
		return View::make('rse')->with('Programas', $ProgramasRse)->with('Eventos',$Eventos)->with('Certificaciones',$Certificaciones);

	}
}

?>