<?php

Route::get('/', 'InicioController@mostrarNoticia');

Route::get('/bolsa-de-trabajo', 'InicioController@mostrarBolsa');

Route::get('/nosotros', 'NosotrosController@mostrarNosotros');