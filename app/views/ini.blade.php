<<<<<<< HEAD
@extends('menu')
 
=======
<form >
<input type="submit" value="Inicio">
<input type="submit" name="nosotros" value="Nosotros">
<input type="submit" value="Productos">
<input type="submit" value="RSE">
<input type="submit" value="Bolsa de trabajo">
<input type="submit" value="Galeria">
<input type="submit" value="Contacto">
<input type="submit" name="buscar">
<input type="submit" value="Buscar">
</form>
<?php  if (Input::has('nosotros'))
{
	echo "Hola,";
    Redirect::action('ProductoController@getProductos');
}
 ?>

>>>>>>> origin/master
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
	
<div class="newsletter"><h2>Newsletter</h2>
	Nombre:<input type="text" name="nombre"><br>
	E-mail:<input type="text" name="buscar"><br>
	<input type="button" value="Suscribirse">
</div>