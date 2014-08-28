
<html>

@extends('menu')
{{ HTML::script('js/jquery.js') }}
{{ HTML::style('css/galeria.css') }}


<title>Galeria</title>

<body> 
<div id="todo">
<div id="page">
<h1>GALERIA</h1>
<div id="gallery">

	<div id="panel">
		<img id="largeImage" src="imagenes/cabecera.jpg" width=565, height=300/>
		<div id="description">Galería de imagenes</div>
	</div>
	
	<div id="thumbs">
	@foreach($galeria1 as $gale)
	{{ HTML::image($gale->Imagen, $gale->Titulo, array('width' => '100', 'height' => '100')) }}
    @endforeach    
	</div>
	
</div>

</div>
</div>

<script>

$('#thumbs').delegate('img','click', function(){
	$('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
	$('#description').html($(this).attr('alt'));
});

</script>


</body>
</html>