
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
		<img id="largeImage" src="imagenes/galeria/pic1.jpg" width=565, height=300/>
		<div id="description">1st image description</div>
	</div>

	<div id="thumbs">
        <img src="imagenes/galeria/pic1.jpg" alt="1st image description" width=100, height=100/>
        <img src="imagenes/galeria/pic2.jpg" alt="2nd image description" width=100, height=100/>
        <img src="imagenes/galeria/pic3.jpg" alt="3rd image description" width=100, height=100/>
        <img src="imagenes/galeria/pic4.jpg" alt="4th image description" width=100, height=100/>
        <img src="imagenes/galeria/pic5.jpg" alt="5th image description" width=100, height=100/>
		<img src="imagenes/galeria/pic6.jpg" alt="6th image description" width=100, height=100/>
        <img src="imagenes/galeria/pic7.jpg" alt="7th image description" width=100, height=100/>
        <img src="imagenes/galeria/pic8.jpg" alt="8th image description" width=100, height=100/>
        <img src="imagenes/galeria/pic9.jpg" alt="9th image description" width=100, height=100/>
        <img src="imagenes/galeria/pic10.jpg" alt="10th image description" width=100, height=100/>
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