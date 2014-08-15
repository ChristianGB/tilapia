@extends('menu')
<div class="bolsa"><h2>Bolsa de trabajo</h2></div>
	
	<ul>
		@foreach($trabajo as $tra)
		{{$tra->Titulo.'<br>'.$tra->Descripcion.'<br><br>' }}
		@endforeach
	</ul>