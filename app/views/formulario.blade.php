<div id="noticias">
<h2>Formulario de noticias</h2>

{{Form::open(array('action' => 'FormularioController@formularioNoticia'))}}
<br>
	{{Form::label('Titulo', 'Escribe el titulo de la noticia: ')}}
	{{Form::text('Titulo')}}
</br>

	{{Form::label('Descripcion', 'Escribe la descripcion de la noticia: ')}}<br>
	{{Form::textarea('Descripcion')}}
<br>

	{{Form::label('Imagen', 'Escribe la url de la imagen de la noticia: ')}}
	{{Form::text('Imagen')}}

<br>
	{{Form::submit('Guardar')}}
{{Form::close()}}

<br>
</div>


<div id="puestos">
<h2>Formulario de puestos</h2>

{{Form::open(array('action' => 'FormularioController@formularioPuesto'))}}
<br>
	{{Form::label('Titulo', 'Escribe el titulo del puesto: ')}}
	{{Form::text('Titulo')}}
</br>

	{{Form::label('Descripcion', 'Escribe la descripcion del puesto: ')}}<br>
	{{Form::textarea('Descripcion')}}
<br>
	{{Form::submit('Guardar')}}
{{Form::close()}}

<br>
</div>

	
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
?>
<div id="programas">

	 {{Form::open(array('action' => 'RseEditionController@AddnewProgram','enctype'=>'multipart/form-data'))}}
    
     <br>Nombre del programa {{Form::text('Titulo')}}
     <br>Descripcion:<br> {{Form::textarea('Descripcion')}}
     <br>Categoria:"  {{Form::select('Categoria', $CatSelect, array_values($CatSelect)[0])}}
     <br>imagen     {{ Form::file('Imagen')}}
        
    {{  Form::submit('Aceptar')}}
	{{Form::close() }}

<div/>

<div id="eventos">

	 {{Form::open(array('action' => 'RseEditionController@AddnewEvent','enctype'=>'multipart/form-data'))}}
    
     <br>Nombre del evento {{Form::text('Titulo')}}
     <br>Descripcion:<br> {{Form::textarea('Descripcion')}}
     <br>Lugar:   {{Form::text('Lugar')}}<br> 
     Fecha:{{Form::selectRange('Dia', 1, 31)}}
     {{Form::selectRange('Mes', 1, 12)}}
     {{Form::selectRange('Anio', 2014, 2050)}}
     <br>imagen     {{ Form::file('Imagen')}}
        
    {{  Form::submit('Aceptar')}}
	{{Form::close() }}

<div/>