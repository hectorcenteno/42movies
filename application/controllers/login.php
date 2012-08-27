<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$CI =& get_instance();
		$CI->config->load("facebook", TRUE);
		$config = $CI->config->item('facebook');
		$this->load->library('Facebook', $config);
	}
	
	public function index() {
		$user = $this->facebook->getUser();
		
		if ($user) {
			try {
				// Proceed knowing you have a logged in user who's authenticated.
				$user_profile = $facebook->api('/me');
				redirect(base_url('index.php/foo'), 'location');
			}
			catch (FacebookApiException $e) {
				echo '<pre>' . htmlspecialchars(print_r($e, true)) . '</pre>';
				$user = null;
			}
		}
		else {
			$data['user'] = $user;
			$data['facebook'] = $this->facebook;
			$this->load->view('login',$data);	
		}
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */