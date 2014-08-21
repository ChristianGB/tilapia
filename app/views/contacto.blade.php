@extends('menu')
{{ HTML::style('css/menu.css') }}
{{ HTML::style('css/contacto.css') }}
{{ HTML::script('js/funciones.js') }}
<div>
	<form method="post" class="contacto">
 	    <fieldset>
			<div><label>Nombre:</label><input type="text" class="nombre" name="nombre" /></div>
			<div><label>Asunto:</label><input type="text" class="asunto" name="asunto" /></div>
			<div><label>Email:</label><input type="text" class="email" name="email" /></div>
			<div><label>Mensaje:</label><textarea cols="30" rows="5" class="mensaje" name="mensaje" ></textarea></div>
 	        <div class="ultimo">
				<img src="ajax.gif" class="ajaxgif hide" />
				<div class="msg"></div>
				<button class="boton_envio">Enviar Mensaje</button>
			</div>
 	    </fieldset>
		<fieldset>
			<label>Teléfonos<br>234623847<br>34738</label><br><br>
			<label>Dirección<br>Av. central poniente<br>34738</label>
		</fieldset>
 	 </form>
	
</div>