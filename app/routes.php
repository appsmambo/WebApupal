<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));
Route::get('/nosotros', array('as' => 'nosotros', 'uses' => 'HomeController@getNosotros'));
Route::get('/servicios', array('as' => 'servicios', 'uses' => 'HomeController@getServicios'));
Route::get('/galeria', array('as' => 'galeria', 'uses' => 'HomeController@getGaleria'));
Route::get('/transparencia', array('as' => 'transparencia', 'uses' => 'HomeController@getTransparencia'));
Route::get('/contacto', array('as' => 'contacto', 'uses' => 'HomeController@getContacto'));
Route::post('/contacto', array('as' => 'contacto', 'uses' => 'HomeController@postContacto'));

// rutas agrupadas para admin
// filtro para auth
Route::group(array('before' => 'auth.admin'), function()
{
	Route::get('/admin', array('as' => 'admin.index', 'uses' => 'AdminController@getIndex'));
	Route::get('/admin/salir', array('as' => 'logout', 'uses' => 'AdminController@getLogOut'));
	Route::get('/admin/perfil-usuario', array('as' => 'perfil', 'uses' => 'AdminController@getPerfil'));
	
	Route::get('/admin/usuarios', array('as' => 'usuarios', 'uses' => 'AdminController@getUsuarios'));
	Route::get('/admin/usuarios/nuevo', array('as' => 'usuariosNuevo', 'uses' => 'AdminController@getUsuariosNuevo'));
	Route::post('/admin/usuarios/nuevo', array('uses' => 'AdminController@postUsuariosNuevo'));
	Route::get('/admin/usuarios/editar/{id}', array('uses' => 'AdminController@getUsuariosEditar'));
	Route::post('/admin/usuarios/editar', array('uses' => 'AdminController@postUsuariosEditar'));
	Route::get('/admin/usuarios/bloquear/{id}', array('uses' => 'AdminController@getUsuariosBloquear'));
	Route::get('/admin/usuarios/activar/{id}', array('uses' => 'AdminController@getUsuariosActivar'));
	
	Route::get('/admin/listar-pedidos', array('as' => 'pedidos', 'uses' => 'PedidosController@getPedidos'));
	Route::get('/admin/paginas/inicio', array('uses' => 'AdminController@getPaginasInicio'));
	
	Route::get('/admin/importar-datos', array('as' => 'stock', 'uses' => 'ProductosController@getStock'));
	Route::post('/admin/stock', array('uses' => 'ProductosController@postStock'));
});
// filtro auth
Route::filter('auth.admin', function()
{
	if (!Sentry::check()) {
		return Redirect::route('login');
	}
});
