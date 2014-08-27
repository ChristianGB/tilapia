
	
<?php
	echo Form::open(array('action' => 'AddProductController@AddnewItem','enctype'=>'multipart/form-data')) ;
    
    echo "producto".Form::text('producto');
    echo "<br>descripcion".Form::text('Descripcion');
    echo "<br>presentaciones".Form::text('Presentaciones');
    echo "<br>codigo".Form::text('Codigo');
    echo "<br>imagen ".Form::file('Imagen');
    
    echo Form::submit('Click Me!');
	echo Form::close() ;

?>
