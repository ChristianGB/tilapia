@extends('menu')
{{ HTML::style('css/menu.css') }}
{{ HTML::style('css/album.css') }}
{{ HTML::script('js/jquery.js') }}
<html>

<head><title>Galeria</title>
<link rel="stylesheet" href="album.css">
</head>
<body>
<div id="todo">
<center><h1>Galeria de imagenes</h1>

<ul>
	
	<div>
         <span class="image-block">
			<a class="image-zoom" href="galeria1"  title="album 1">
				<img width="225" height="140" src="pic1.jpg" title="album 1" />                    
			</a>
         </span>
		 <span class="image-block">
			<a class="image-zoom" href="galeria1"  title="album 2">
				<img width="225" height="140" src="pic1.jpg" title="album 2" />                    
			</a>
         </span> 
		 <span class="image-block">
			<a class="image-zoom" href="galeria1"  title="album 3">
				<img width="225" height="140" src="pic1.jpg" title="album 3" />                    
			</a>
         </span> 
	</div>




</ul>
</div>
</body>
</html>