<?php

use App\Http\Controllers\UsuariosController;

use Illuminate\Support\Facades\Route;


/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider and all of them will

| be assigned to the "web" middleware group. Make something great!

|

*/


Route::get('/', function () {

    return view('welcome');

});


Route::get('usuarios', 'UsuariosController@index')->name('usuarios.index');
Route::get('usuarios/agregar', 'UsuariosController@create')->name('usuarios.create');
Route::post('usuarios', 'UsuariosController@store')->name('usuarios.store');

Route::get('usuarios/agregar', function () { return view('usuarios.agregar'); })->name('usuarios.agregar');
Route::resource('usuarios', UsuariosController::class);