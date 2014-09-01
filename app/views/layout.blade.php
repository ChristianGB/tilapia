
<html>
<head>

	<title></title>
</head>

{{ HTML::style('css/menu.css') }}
<div id="todo">
<body>
<div id="Productos">
<h3>Productos</h3>

<?php


foreach ($arreglo as $key) {

	echo HTML::image($key->Imagen, "Imagen no encontrada", array('id' => $key->Titulo, 'title' =>$key->Titulo)) ;
	
	echo "<br>";
	echo ($key->Titulo);
	echo "<br>";
		echo ($key->Descripcion);
	echo "<br>";
		echo ($key->Presentaciones);
	echo "<br>";
		echo ($key->Codigo);
	echo "<br>";
}
?>




</div>
<?php
$array=[null,"Garantias","Tiempo de entrega","Regiones","Transportacion","Empaquetamiento"];
for ($i=1; $i < 6; $i++) {$id=strval($i) ?>

	<div id={{$id}}  class="geting">
				
				<h2 class="titulo">{{$array[$i]}}</h2>
				<p class="categoria"></p>
				<input id="SpecialV"type="hidden"  >
				<input type="button" value=>
				
		</div>
	
	
		<?php
}
		?>

<table border="2" align="center">
<caption>Monthly savings</caption>
<tr> <td>  
<h2>
	Fusce lacinia orci ut leo luctus, eget eleifend purus porttitor. Nam tempor laoreet laoreet. Quisque erat mi, viverra sit amet suscipit suscipit, luctus sed ligula. Maecenas congue pretium risus. Nunc accumsan sagittis sapien, in maximus purus scelerisque sed. Vestibulum at libero quis tellus tempus porttitor faucibus at neque. Etiam dignissim quis nibh vel vestibulum. Integer lobortis ligula in diam venenatis, sit amet consequat enim laoreet. Morbi auctor eleifend tempor.
</h2>
</td> </tr> 
<td>
<h2>
hola soy furcio
</h2>
</td>
</table>

<div id="Garantias">   		 @yield('Garantias')</div>
<div id="TiempoEntrega">     @yield('TiempoEntrega')</div>
<div id="Regiones">  		 @yield('Regiones')</div>
<div id="Transportacion">    @yield('Transportacion')</div>
<div id="Empaquetamiento">   @yield('Empaquetamiento')</div>

</body>
</div>
</html>

