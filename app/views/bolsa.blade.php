@extends('menu')
{{ HTML::style('css/menu.css') }}
<div id="todo">
<div class="bolsa"><h2>Bolsa de trabajo</h2></div>
	
	<ul>
		@foreach($trabajo as $tra)
		{{$tra->Titulo.'<br>'.$tra->Descripcion.'<br><br>' }}
		@endforeach
	</ul>
</div>	