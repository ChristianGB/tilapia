<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
	{{ HTML::style('css/panel.css') }}
	{{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/edicion.js') }}
</head>
<body>
	<section id="principal">
		<section id="contenido">
		
		@foreach ($Programas as $key ) 
		
		<div id="content" class="geting"data-contenido="{{$key->id}}">
				<img src={{$key->Imagen}} id="imagen">
				<h2 class="titulo">{{$key->Titulo}}</h2>
				<p class="categoria">{{$key->Categoria}}</p>
				<input id="SpecialV"type="hidden" value="{{$key->id}}" >
				<input type="button" value="{{$key->id}}">
				{{$key->id}}
		</div>
		

		@endforeach
			
		
		</section>
		<section id="tools">
			<img src="tilapia.jpg" id="imgContent">
			<form>
				<input type="text" id="titleContent">
				<textarea id="descriptionContent"></textarea>

			</form>
			<button id="editar">Editar</button>
			<button id="eliminar">Eliminar</button>
		</section>
	</section>
</body>
</html>