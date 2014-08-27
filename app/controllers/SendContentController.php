<?php  

class SendContentController extends BaseController
{
	public function getProgramas(){


	



$categorias = DB::table('contenido')
           ->select(DB::raw('distinct Categoria'))
           ->whereNotNull('Categoria')
           ->get();

foreach ($categorias as $key ) {
	if (!$key->Categoria!=null) { } else{
	$CatSelect[$key->Categoria]= $key->Categoria;
	}
}

				try{	
			$ProgramasRse = DB::table('contenido')->where('Tipo','=',3)->get();
			$Eventos = DB::table('contenido')->where('Tipo','=',4)->get();
			$Certificaciones = DB::table('contenido')->where('Tipo','=',5)->get();
			}catch(ErrorException $e){}
	return View::make('PanelEdicion')
	->with('Programas', $ProgramasRse)
	->with('Eventos',$Eventos)
	->with('Certificaciones',$Certificaciones)
	->with('CatSelect',$CatSelect);
	}
}
?>