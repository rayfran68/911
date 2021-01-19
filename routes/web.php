<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Auth;

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



Route::get('/Cuadrantes','todo@find');

Route::get('/Cuadrantes/{id}','todo@show');

Route::get('/Operatividad', function () {
    return view('Operatividad');
});


Route::get('/login', function () {
    return('Prueba ruta');
});


Route::get('/PostCreate','PostController@create')->name('PostCreate');

Route::GET('/Posts', 'PostController@index')->name('Posts');

Route::GET('/Post/{id}', 'PostController@showPublic')->name('Post');

Route::POST('/Departamento_id', 'RegisterController@departamento_id' )->name('Departamento_id');


Route::POST('/crearPost', 'PostController@store' )->name('CrearPost');

Route::get('/verPosts', 'PostController@show')->name('VerPosts');


Route::GET('/postsDepartamento', 'PostController@showPublicDepartamento');


Route::POST('/BorrarPosts/{id}', 'PostController@destroy')->name('BorrarPosts');

Route::POST('/EditPosts/{id}', 'PostController@edit')->name('EditPosts');

Route::PUT('/UpdatePosts/{id}', 'PostController@update')->name('UpdatePosts');

Route::get('/CarouselLlenar', 'CarouselController@create' )->name('LlenarCarousel');

Route::POST('/CarouselStore', 'CarouselController@store' )->name('StoreCarousel');


Route::get('/register', function () {
    return view('Auth.Register');
});

Route::get('/registerr', function () {
    return view('Auth.Register');
});


Auth::routes(['reset'=>false]);

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

