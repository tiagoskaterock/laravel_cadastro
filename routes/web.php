<?php

Route::get('/', function () {
    return view('index');
});




Route::get('/produtos', 'ProdutoController@index');




Route::get('/categorias', 'CategoriaController@index');