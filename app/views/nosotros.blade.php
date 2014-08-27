@extends('menu')
<br><br>
<div id="todo">
<br><br>
<div id="tabla1">
	<TABLE BORDER="1" aling=center> 
		<TR> 
			<TD>Mision: <br>
			Producir la mejor tilapia, desarrollando comunidades.
			</TD> 
			<TD>Vision: <br>
			Ser la empresa lider global en la producción, industrialización y
			comercialización de tilapia; pero sobre todo ser proveedores de alimento de alto valor
			nutrimental, sostenibilidad social y social.
			</TD>  
		</TR> 
		<TR> 
			<TD>Valores: <br>
			Calidad/Continuidad/Responsabilidad
			</TD> 
			<TD>Objetivos de la empresa
			Ser la empresa lider global en la producción, industrialización y
			comercialización de tilapia; pero sobre todo ser proveedores de alimento de alto valor
			nutrimental, sostenibilidad social y social.
			</TD>  
		</TR> 
	</TABLE> 
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
				{{'<td>'.HTML::image($dire->Imagen, "Imagen no encontrada").'<td>'
				.'-Nombre: '.$dire->Nombre.
				'<br>'.'-Puesto: '.$dire->Puesto.
				'<br>'.'-Dirección: '.$dire->Direccion.
				'<br>'.'-E-mail: '.$dire->Email.
				'<br>'.'-Teléfono: '.$dire->Telefono.' '.'-Ext.: '.$dire->Ext.
				'<br>'.'Celular: '.$dire->Celular.
				'<br>'.'<br><br>'.'<tr>'}}
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