<?php

/**
* 
*/
class MovieModel extends CI_Model
{
	//var $id = 0;
	var $name = '';
	var $year = 0;
	var $description = '';
	var $banner_url;
	var $thumbnail_url;
	var $fb_id;
	var $rt_id;
	var $source;
	var $resource_url;
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	public function insert( $data)
	{
		//$this->id 			= $data[''];
		$this->name 			= isset($data['name']) 			? $data['name'] : '';
		$this->year 			= isset($data['year']) 			? $data['year'] : '';
		$this->description 		= isset($data['description']) 	? $data['description'] : '';
		$this->banner_url		= isset($data['banner_url']) 	? $data['banner_url'] : '';
		$this->thumbnail_url	= isset($data['thumbnail_url']) ? $data['thumbnail_url'] : '';
		$this->fb_id			= isset($data['fb_id']) 		? $data['fb_id'] : '';
		$this->rt_id			= isset($data['rt_id']) 		? $data['rt_id'] : '';
		$this->source			= isset($data['source']) 		? $data['source'] : 'rt';
		$this->resource_url		= isset($data['resource_url']) 	? $data['resource_url'] : '';
		
		$this->db->insert('movies', $this);
	}
}