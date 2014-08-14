<input type="button" value="Inicio"><input type="button" value="Nosotros"><input type="button" value="Productos"><input type="button" value="RSE"><input type="button" value="Bolsa de trabajo"><input type="button" value="Galeria"><input type="button" value="Contacto"><input type="text" name="buscar"><input type="button" value="Buscar">
<div class="bolsa"><h2>Bolsa de trabajo</h2></div>
	
	<ul>
		@foreach($trabajo as $tra)
		{{$tra->Titulo.'<br>'.$tra->Descripcion.'<br><br>' }}
		@endforeach
	</ul>