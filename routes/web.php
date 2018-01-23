<?php


Route::get('/', 'testController@welcome');

Route::get('/prueba', function(){
  return 'Hola esta es la ruta prueba';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
