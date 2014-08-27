
	
<?php


$categorias = DB::table('contenido')
                     ->select(DB::raw('distinct Categoria'))
                     ->whereNotNull('Categoria')
                     ->get();

foreach ($categorias as $key ) {
	if (!$key->Categoria!=null) { } else{
	$CatSelect[$key->Categoria]= $key->Categoria;
	}
}




	echo Form::open(array('action' => 'RseEditionController@AddnewProgram','enctype'=>'multipart/form-data')) ;
    
    echo "<br>Nombre del programa".Form::text('Titulo');
    echo "<br>Descripcion: ".Form::text('Descripcion');
    echo "<br>Categoria:".Form::select('Categoria', $CatSelect, array_values($CatSelect)[0]);
    echo "<br>imagen ".Form::file('Imagen');
    
   
    Response::download("archivos\\RSM-web.pdf"); 

    
    echo Form::submit('Aceptar');
	echo Form::close() ;

?>
