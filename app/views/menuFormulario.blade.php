{{ HTML::style('css/menu.css') }}


<div id="cabecera"></div>
<div id="menu">
<ul class="menu">
<li>{{HTML::link('#', 'Noticias', array('title' => 'Ir a ','id'=>'mostrarnoticia'))}}</li>
<li>{{HTML::link('#', 'Puestos', array('title' => 'Ir a ','id'=>'mostrarpuestos'))}}</li>
<li>{{HTML::link('#', 'Programas', array('title' => 'Ir a ','id'=>'mostrarprogramas'))}}</li>
<li>{{HTML::link('#', 'Eventos', array('title' => 'Ir a ','id'=>'mostrareventos'))}}</li>
</ul>