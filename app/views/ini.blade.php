@extends('menu')
{{ HTML::style('css/menu.css') }}
<div id="todo">
<br><br><div class="noticias"><h1>Noticias</h1></div>
	<ul>
		@foreach($noticia as $noti)
		{{HTML::image($noti->Imagen, "Imagen no encontrada").'<br>'.$noti->Titulo.'<br>'.$noti->Descripcion.'<br><br>' }}
		@endforeach
	</ul>
<div class="recetario"><h2>Recetario</h2></div>
	<ul>
		@foreach($recetario as $rece)
		{{HTML::image($rece->Imagen, "Imagen no encontrada").'<br>'.$rece->Titulo.'<br>'.$rece->Descripcion.'<br>'.$rece->Ingredientes.'<br><br>' }}
		@endforeach
	</ul>
	
<div><br></div><br><div><br></div>

</div>
