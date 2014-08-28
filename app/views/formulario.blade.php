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



