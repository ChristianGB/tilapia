<html>
@extends('menu')
{{ HTML::style('css/menu.css') }}
{{ HTML::style('css/album.css') }}
{{ HTML::script('js/jquery.js') }}


<title>Galeria</title>


<body>
<div id="todo">
<center><h1>Galeria de imagenes</h1>

<ul>
	<div>
         <span class="image-block">
			@foreach($album1 as $alb)<a href='galeria1/{{$alb->idAlbum}}'>
			{{ HTML::image($imagen->Imagen, $alb->Descripcion, array('width' => '225', 'height' => '140'))}}
			</a>@endforeach 
         </span>
	</div>
</ul>

</div>
</body>
</html>