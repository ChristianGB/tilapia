
<html>
<head>
	<title></title>
</head>
<body>
<div id="todo">
<div id="Programas_rse">   		 @yield('Programas_rse')
<?php  
	foreach ($Programas as $key) {
		echo HTML::image($key->Imagen, "Imagen no encontrada", array('id' => $key->Titulo, 'title' =>$key->Titulo)) ;
		echo "<br>";
		echo ($key->Titulo);
		echo "<br>";
		echo ($key->Descripcion);
		echo "<br>";	
		echo ($key->Categoria);
		echo "<br>";
	}
?>
</div>
<div id="Eventos">     @yield('Eventos')
<?php  
	foreach ($Eventos as $key) {
		echo HTML::image($key->Imagen, "Imagen no encontrada", array('id' => $key->Titulo, 'title' =>$key->Titulo)) ;
		echo "<br>";
		echo ($key->Titulo);
		echo "<br>";
		echo ($key->Descripcion);
		echo "<br>";
		echo ($key->Lugar);
		echo "<br>";
		echo ($key->Fecha);
		echo "<br>";
	
	}
?>
</div>
<div id="Certificaciones">  	
	 @yield('Certificaciones')
<?php  
	foreach ($Certificaciones as $key) {
		echo HTML::image($key->Imagen, "Imagen no encontrada", array('id' => $key->Titulo, 'title' =>$key->Titulo)) ;
		echo "<br>";
		echo ($key->Titulo);
		echo "<br>";
		echo ($key->Descripcion);
		echo "<br>";
	
	}
?>
	 </div>
<div id="Politica_Amb">    @yield('Politica_Amb')</div>

</div>
</body>
</html>
