<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Controlador de peliculas
*/
class Movie extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('movie_index');
	}
}
