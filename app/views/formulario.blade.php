<div id:"noticias">
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
	{{Form::selectMonth('month')}}
<br>
	{{Form::select('animal', array('Cats' => array('leopard' => 'Leopard'),'Dogs' => array('spaniel' => 'Spaniel')))}}

<br>
	{{Form::submit('Guardar')}}
{{Form::close()}}

<br>
</div>


<div id:"puestos">
<h2>Formulario de puestos</h2>

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
	{{Form::selectMonth('month')}}
<br>
	{{Form::select('animal', array('Cats' => array('leopard' => 'Leopard'),'Dogs' => array('spaniel' => 'Spaniel')))}}

<br>
	{{Form::submit('Guardar')}}
{{Form::close()}}

<br>
</div>