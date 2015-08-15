<?php

class HomeController extends BaseController {

	private $_maxScroll;
	
	public function getInicio()
	{
		$this->_maxScroll = 730;
		return View::make('inicio')->with('maxScroll', $this->_maxScroll);
	}
	
	public function getNosotros()
	{
		$this->_maxScroll = 410;
		return View::make('nosotros')->with('maxScroll', $this->_maxScroll);
	}
	
	public function getServicios()
	{
		$this->_maxScroll = 410;
		return View::make('servicios')->with('maxScroll', $this->_maxScroll);
	}
	
	public function getTransparencia()
	{
		$this->_maxScroll = 410;
		return View::make('transparencia')->with('maxScroll', $this->_maxScroll);
	}
	
	public function getContacto()
	{
		$this->_maxScroll = 410;
		return View::make('contacto')->with('maxScroll', $this->_maxScroll);
	}
	
	public function postContacto()
	{
		if (Request::isMethod('post'))
		{
			$nombre = Input::get('name');
			$telefono = Input::get('telefono');
			$email = Input::get('email');
			$mensaje = Input::get('mensaje');
		}
	}

}
