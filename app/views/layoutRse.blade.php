
<html>
<head>
	<title></title>
</head>
<body>

<div id="Programas_rse">   		 @yield('Programas_rse')
<?php  
	foreach ($Programas as $key) {
		echo "<br>";
		echo ($key->Titulo);
		echo "<br>";
		echo ($key->Descripcion);
		echo "<br>";
		echo ($key->Imagen);
		echo "<br>";
	}
?>
</div>
<div id="Eventos">     @yield('Eventos')
<?php  
	foreach ($Eventos as $key) {
		echo "<br>";
		echo ($key->Titulo);
		echo "<br>";
		echo ($key->Descripcion);
		echo "<br>";
		echo ($key->Imagen);
		echo "<br>";
	}
?>
</div>
<div id="Certificaciones">  	
	 @yield('Certificaciones')
<?php  
	foreach ($Certificaciones as $key) {
		echo "<br>";
		echo ($key->Titulo);
		echo "<br>";
		echo ($key->Descripcion);
		echo "<br>";
		echo ($key->Imagen);
		echo "<br>";
	}
?>
	 </div>
<div id="Politica_Amb">    @yield('Politica_Amb')</div>


</body>
</html>
