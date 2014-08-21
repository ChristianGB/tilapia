@extends('menu')
{{ HTML::style('css/menu.css') }}
<div id="todo">
	<h1>Formulario de noticias</h1>
	  <div class="wrapper">
 
        <h1>Formulario de registro laravel</h1>
 
        <!--si el formulario contiene errores de validación-->
        @if($errors->has())
            <div class="errors">
                <!--si el usuario falla la validación mostramos el error-->
                @if($errors->has('titulo'))
 
                    <p>{{ $errors->first('titulo') }}</p>
 
                @endif
 
                <!--si el password falla la validación mostramos el error-->
                @if ($errors->has('descripcion'))
 
                    <p>{{ $errors->first('descripcion') }}</p>
 
                @endif
 
                <!--si el email falla la validación mostramos el error-->
                @if ($errors->has('imagen'))
 
                    <p>{{ $errors->first('imagen') }}</p>
 
                @endif
 
            </div>
        @endif
 
        <!--pintamos el formulario haciendo uso de la clase form de laravel-->
            <div class="form">
    
                 {{ Form::open('formulario-noticia') }}
 
                {{ Form::label('titulo', 'Titulo') }}
                <!--equivale a <label for="usuario">Usuario</label>-->
 
                {{ Form::text('titulo', Input::old('titulo')) }}
                <!--equivale a <input type="text" name="usuario" value="" id="usuario">-->
 
                {{ Form::label('descripcion', 'Descripcion') }}
                <!--equivale a <label for="email">Email</label>-->
 
                {{ Form::text('descripcion', Input::old('descripcion')) }}
                <!--equivale a <input type="email" name="email" value="" id="email">-->
 
                {{ Form::label('imagen', 'Imagen') }}
                <!--equivale a <label for="password">Password</label>-->
 
               {{ Form::text('imagen', Input::old('imagen')) }}
 
                <br />
                 {{ Form::submit('Agregar') }}
 
                {{ Form::close() }}
                <!--equivale a </form>-->
 
            </div>
 
            <div class="success">
 
                <!--si el registro se lleva a cabo, mostramos el mensaje que 
                envíamos desde el controlador formularios-->
                @if(Session::has('mensaje'))
 
                    <div id="flash_notice">{{ Session::get('mensaje') }}</div>
                     
                @endif
 
            </div>
 
        </div>
</div>	