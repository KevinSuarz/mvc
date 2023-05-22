<?php

use Lib\Route;

use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function(){
  return 'hola desde contact';
});

Route::get('/about', function(){
  return 'hola desde about';
});

Route::get('/courses', function(){
  return 'hola desde la pagina courses';  
});

Route::get('/courses/:slug', function($slug){
  return 'hola desde la pagina '. $slug;  
});


Route::dispatch();