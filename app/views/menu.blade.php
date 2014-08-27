{{ HTML::style('css/menu.css') }}

<div id="cabecera"></div>
<div id="menu">
<ul class="menu">
<li>{{HTML::link('/', 'Inicio', array('title' => 'Ir a Inicio'))}}</li>
<li>{{HTML::link('nosotros', 'Nosotros', array('title' => 'Ir a Nosotros'))}}</li>

	<li>{{HTML::link('/', 'Organigrama', array('title' => 'Ir a Organigrama'))}}</li>
	<li>{{HTML::link('/', 'Politicas', array('title' => 'Ir a Politicas de RH'))}}</li>
	
<li>{{HTML::link('productos', 'Productos', array('title' => 'Ir a productos'))}}</li>
<li>{{HTML::link('rse', 'Responsabilidad Social de la Empresa', array('title' => 'Ir aResponsabilidad Social de la Empresa'))}}</li>
<li>{{HTML::link('bolsa', 'Bolsa de trabajo', array('title' => 'Ir a Bolsa de trabajo'))}}</li>
<li>{{HTML::link('galeria', 'Galería', array('title' => 'Ir a Galería'))}}</li>
<li>{{HTML::link('contacto', 'Contacto', array('title' => 'Ir a Contacto'))}}</li>
<li><input type="text" name="buscar"><input type="button" value="Buscar"></li>
</ul>

</div>

<div id="footer">

<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.facebook.com" target="_blank"><img src="https://lh3.googleusercontent.com/-H8xMuAxM-bE/UefWwJr2vwI/AAAAAAAAEdY/N5I41q19KMk/s32-no/facebook.png"></a>

<a href="http://www.twitter.com/home?status=http://www.twitter.com" target="_blank"><img src="https://lh5.googleusercontent.com/-xZVxH6CsUaQ/UefWwgi8o3I/AAAAAAAAEdk/reo5XS6z8-8/s32-no/twitter.png"></a>

<a href="https://plus.google.com/share?url=http://www.tuweb.com/" target="_blank"><img src="https://lh5.googleusercontent.com/-5Q7Sj0SXhOA/UefWwcrnZ-I/AAAAAAAAEdg/auK3wqGCbZE/s32-no/googleplus.png"></a>
<small>Aqui va la direccion, y cosas por el estilo</small>
</div>

