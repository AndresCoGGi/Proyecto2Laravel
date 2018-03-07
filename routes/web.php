<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios',function(){
   return 'usuarios';
});

//usuarios/nuevo no coincide coincide con id
Route::get('usuarios/{id}',function($id){
    return "mostrando detalle del usuario: $id";
})->where('id','[0-9]+');//para validar que la ruta sea con un numero

Route::get('usuarios/nuevo',function(){
      return 'crear nuevo usuario';

});
//laravel toma la primera ruta que el encuentre /usuarios/'?????'

Route::get('/saludo/{name}/{nickname}',function($name,$nickname=null){
   if($nickname){
       return "bienvenido {$name}, tu apodo es {$nickname}";
   }else{
       return "bienvenido {$name}, no tienes apodo";
   }
   
});