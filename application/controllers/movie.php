<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Controlador de peliculas
*/
class Movie extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MovieModel');
	}
	public function index()
	{
		$this->load->view('movie_index');
	}
	public function search()
	{
		$this->load->view('movie_search');
	}
	public function detail()
	{
		//$movie_id = (isset($_GET['rt_id']) && is_numeric($_GET['rt_id'])) ? $_GET['rt_id'] : 0;
		$movie_id = (isset($_GET['movie_id']) && is_numeric($_GET['movie_id'])) ? $_GET['movie_id'] : 0;
		$movie_tyep = isset($_GET['source']) ?  $_GET['source'] : 'rt';
		
		//$this->MovieModel->insert(array('name' => 'Movie', 'year' => 2008, 'descripcion' => 'banner_url', 'source' => 'rt'));
		
		if($movie_id == 0)
		{
			redirect('welcome', 'location'); 
		}
		
		$this->load->view('movie_detail');
	}
	public function chekin()
	{
		// Agrega una actividad 'waching'
		$this->MovieModel->insert(
			array(
				'name' => $_POST['title'],
				'year' => $_POST['year'],
				'descripcion' => $_POST['description'],
				'banner_url' => $_POST['banner_url'], 
				'thumbnail_url' => $_POST['thumbnail_url'], 
				'source' => 'rt',
				'resource_url' => $_POST['source_url']
			
			)
		);
	}
	public function jscheckin()
	{
		$this->chekin();
		
		$this->load->view('movie_jscheckin');
	}
}
