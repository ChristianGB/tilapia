
<html>
<head>
	<title></title>
</head>
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
<div id="Garantias">   		 @yield('Garantias')</div>
<div id="TiempoEntrega">     @yield('TiempoEntrega')</div>
<div id="Regiones">  		 @yield('Regiones')</div>
<div id="Transportacion">    @yield('Transportacion')</div>
<div id="Empaquetamiento">   @yield('Empaquetamiento')</div>

</body>
</html>
