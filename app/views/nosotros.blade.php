<input type="button" value="Inicio"><input type="button" value="Nosotros"><input type="button" value="Productos"><input type="button" value="RSE"><input type="button" value="Bolsa de trabajo"><input type="button" value="Galeria"><input type="button" value="Contacto"><input type="text" name="buscar"><input type="button" value="Buscar">
<br><br>
<div class="mision"><h1>Mision</h1>
	<ul>
		<h2>Aqui va la mision de la empresa...</h2>	
	</ul>
</div>
<br><br>
<div class="vision"><h1>Vision</h1>
	<ul>
		<h2>Aqui va la vision de la empresa...</h2>	
	</ul>
</div>
<br><br>
<div class="valores"><h1>Valores</h1>
	<ul>
		<h2>Aqui van los valores de la empresa...</h2>	
	</ul>
</div>
<br><br>
<div class="objetivos"><h1>Objetivos de la empresa</h1>
	<ul>
		<h2>Aqui van los objetivos de la empresa...</h2>	
	</ul>
</div>
<br><br>
<div class="directorio"><h1>Directorio</h1>
	<ul>
		<h2>Aqui va el directorio de la empresa...</h2>
		<ul>
			@foreach($directorio as $dire)
			{{'-Nombre: '.$dire->Nombre.'<br>'.'-Puesto: '.$dire->Puesto.'<br>'.'-Dirección: '.$dire->Direccion.'<br>'.'-E-mail: '.$dire->Email.'<br>'.'-Teléfono: '.$dire->Telefono.' '.'-Ext.: '.$dire->Ext.'<br>'.'Celular: '.$dire->Celular.'<br>'.$dire->Imagen.'<br><br>' }}
			@endforeach
		</ul>
	</ul>
</div>
<br><br>
<div class="organigrama"><h1>Organigrama</h1>
	<ul>
		<h2>Aqui va el organigrama de la empresa...</h2>	
	</ul>
</div>
<br><br>
<div class="politicas"><h1>Politicas de RH</h1>
	<ul>
		<h2>Aqui van las politicas de RH...</h2>	
	</ul>
</div>