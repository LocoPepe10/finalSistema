<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');//Formulario de acceso al sistema.
});
Route::get('/registro', function(){
	return view('auth/register');
});
Route::get('/listadousuarios', function(){
	return view('auth/userlist');
});
//Rutas especificadas, para cada pagina o vista en especifico.

Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');
Route::resource('ventas/cliente','ClienteController');
Route::resource('compras/proveedor','ProveedorController');
Route::resource('compras/ingreso','IngresoController');
Route::resource('ventas/venta','VentaController');
Route::resource('seguridad/usuario','UsuarioController');

Route::get('pdf', function(){
	$articulos = sisVentas\Articulo::all();
	$pdf = PDF::loadView('vista', ['articulos' => $articulos]);
	return $pdf->download('archivo.pdf');
});

Route::get('prove', function(){
	$proveedores = sisVentas\Persona::all();
	$prove = PDF::loadView('proveedor', ['proveedores' => $proveedores]);
	return $prove->download('archivo.pdf');
});

Route::get('client', function(){
	$clientes = sisVentas\Persona::all();
	$client = PDF::loadView('cliente', ['clientes' => $clientes]);
	return $client->download('archivo.pdf');
});




Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/{slug}', 'HomeController@index');//Redirecciona a Home.
