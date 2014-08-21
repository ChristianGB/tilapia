{{ HTML::style('css/menu.css') }}
<div id="cabecera">cabecera</div>
<div id="menu">
<ul class="menu">
<li>{{HTML::link('/', 'Inicio', array('title' => 'Ir a Inicio'))}}</li>
<li>{{HTML::link('nosotros', 'Nosotros', array('title' => 'Ir a Nosotros'))}}</li>
<ul>
	<li>{{HTML::link('/', 'Organigrama', array('title' => 'Ir a Organigrama'))}}</li>
	<li>{{HTML::link('/', 'Politicas', array('title' => 'Ir a Politicas de RH'))}}</li>
</ul>	
<li>{{HTML::link('productos', 'Productos', array('title' => 'Ir a productos'))}}</li>
<li>{{HTML::link('rse', 'Responsabilidad Social de la Empresa', array('title' => 'Ir aResponsabilidad Social de la Empresa'))}}</li>
<li>{{HTML::link('bolsa', 'Bolsa de trabajo', array('title' => 'Ir a Bolsa de trabajo'))}}</li>
<li>{{HTML::link('galeria', 'Galería', array('title' => 'Ir a Galería'))}}</li>
<li>{{HTML::link('contacto', 'Contacto', array('title' => 'Ir a Contacto'))}}</li>
<li><input type="text" name="buscar"><input type="button" value="Buscar"></li>
</ul>
</div>
