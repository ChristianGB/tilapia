<input type="button" value="Inicio"><input type="button" value="Nosotros"><input type="button" value="Productos"><input type="button" value="RSE"><input type="button" value="Bolsa de trabajo"><input type="button" value="Galeria"><input type="button" value="Contacto"><input type="text" name="buscar"><input type="button" value="Buscar">
<br><br><div class="noticias"><h1>Noticias</h1></div>
	<ul>
		@foreach($noticia as $noti)
		{{$noti->Titulo.'<br>'.$noti->Descripcion.'<br>'.$noti->Imagen.'<br><br>' }}
		@endforeach
	</ul>
<div class="recetario"><h2>Recetario</h2></div>
	<ul>
		@foreach($recetario as $rece)
		{{$rece->Titulo.'<br>'.$rece->Descripcion.'<br>'.$rece->Ingredientes.'<br>'.$rece->Imagen.'<br><br>' }}
		@endforeach
	</ul>
	
<div class="newsletter"><h2>Newsletter</h2>
	Nombre:<input type="text" name="nombre"><br>
	E-mail:<input type="text" name="buscar"><br>
	<input type="button" value="Suscribirse">
</div>