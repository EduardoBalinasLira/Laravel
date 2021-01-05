<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', function() {
    return "Saludos desde user";
});

//Esta ruta hace un get con un parametro que se toma en la funcion
//Si se le agrega ? en la funcion podemos mandar un valor por default
Route::get('/usuario/{name?}', function($name = "valor por default") {
    return "Hola ". $name;
})->where('name','[a-zA-Z]+'); // Esta linea hace que solo admita letras

Route::get('/products/{id?}', function($id = 1) {
    return "El numero del producto es: ". $id;
})->where('id', '[0-9]+'); // Esta linea solo permite admitir numeros

//Lo que nos permite esta peticion es tener el get y el post por si nuestra ruta ocupa el mismo nombre
Route::match(['get', 'post'], '/students', function(Request $req) {
    return "El metodo que se esta ocupando es: ". $req->method();
});

//la funcion any nos spermite mandar cualquier tipo de peticion
Route::any('/any', function(Request $req){
    return "El metodo que se esta ocupando en la ruta any es: ". $req->method();
});

