<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));
Route::get('/nosotros', array('as' => 'nosotros', 'uses' => 'HomeController@getNosotros'));
Route::get('/servicios', array('as' => 'servicios', 'uses' => 'HomeController@getServicios'));
Route::get('/galeria', array('as' => 'galeria', 'uses' => 'HomeController@getGaleria'));
Route::get('/transparencia', array('as' => 'transparencia', 'uses' => 'HomeController@getTransparencia'));
Route::get('/contacto', array('as' => 'contacto', 'uses' => 'HomeController@getContacto'));
