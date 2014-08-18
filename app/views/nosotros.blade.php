@extends('menu')
<br><br>
<div id="todo">
<div class="mision"><h1>Mision</h1>
	<ul>
		<h2>Producir la mejor tilapia, desarrollando comunidades.</h2>	
	</ul>
</div>
<br><br>
<div class="vision"><h1>Vision</h1>
	<ul>
		<h2>Ser la empresa lider global en la producción, industrialización y
		comercialización de tilapia; pero sobre todo ser proveedores de alimento de alto valor 
		nutrimental, sostenibilidad social y social.
		</h2>
	</ul>
</div>
<br><br>
<div class="valores"><h1>Valores</h1>
	<ul>
		<h2>Calidad/Continuidad/Responsabilidad</h2>	
	</ul>
</div>
<br><br>
<div class="objetivos"><h1>Objetivos de la empresa</h1>
	<ul>
		<h2>Ser la empresa lider global en la producción, industrialización y
		comercialización de tilapia; pero sobre todo ser proveedores de alimento de alto valor 
		nutrimental, sostenibilidad social y social.</h2>	
	</ul>
</div>
<br><br>

<div class="directorio"><h1>Directorio</h1>
	<ul>
		<h2>Aqui va el directorio de la empresa...</h2>
		<ul>
		<table border=1 cellpadding=4 cellspacing=0>
		<tr>
        <th colspan=5> Directorio </th>
		<tr>@foreach($directorio as $dire)
				{{'<td>'.'-Nombre: '.$dire->Nombre.'<br>'.'-Puesto: '.$dire->Puesto.'<br>'.'-Dirección: '.$dire->Direccion.'<br>'.'-E-mail: '.$dire->Email.'<br>'.'-Teléfono: '.$dire->Telefono.' '.'-Ext.: '.$dire->Ext.'<br>'.'Celular: '.$dire->Celular.'<br>'.'<td>'.HTML::image($dire->Imagen, "Imagen no encontrada").'<br><br>'.'<tr>'}}
			@endforeach  
		</table>		
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
</div>