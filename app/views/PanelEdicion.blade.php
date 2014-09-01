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
		
		<div id="content" class="content" 
		data-contenido="{{$key->Descripcion}}"
		data-titulo="{{$key->Titulo}}"
		data-imagen="{{$key->Imagen}}"
		data-categoria="{{$key->Categoria}}"
		data-id="{{$key->id}}">
		<div id="selector">
				<img id="imagen" class="thumb" src={{$key->Imagen}} ">
				<h2 class="titulo">{{$key->Titulo}}</h2>
				<p class="categoria">{{$key->Categoria}}</p>
				<input data-content="{{$key->id}}" class="SpecialV"type="hidden" value={{$key->id}} >
		</div>
		</div>
		
		@endforeach
			
		
		</section>
		<section id="tools" >
			<img src="imagenes/programas/tila1.jpg" id="imgContent">
			<form>
				<input type="text" id="titleContent">
				<textarea id="descriptionContent" ></textarea>
				<input id="get-id"type="hidden" value="">
				<input id="editar">   Editar >
				<input id="eliminar"> Eliminar >
			</form>
			
		</section>
	</section>
</body>
</html>