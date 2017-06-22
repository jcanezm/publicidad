<?php


#Route::get('/','PostsController@index');

#Route::get('/post/{id}','PostsController@show');
Route::get('/nosotros','PaginasController@nosotros');
Route::get('/contacto','PaginasController@contacto');
Route::get('/login','PaginasController@login');
Route::get('/inicio','PaginasController@index');


Route::get('/hola',function(){
	return 'holaaa';
});
