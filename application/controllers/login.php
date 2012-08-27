<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		parse_str( $_SERVER['QUERY_STRING'], $_REQUEST );
		$CI =& get_instance();
		$CI->config->load("facebook", TRUE);
		$config = $CI->config->item('facebook');
		$this->load->library('Facebook', $config);
	}
	
	public function index() {
		$user = $this->facebook->getUser();
		//print_r($user);
		
		if ($user != 0) {
			try {
				// Proceed knowing you have a logged in user who's authenticated.
				$user_profile = $this->facebook->api('/me');
				$data['user'] = $user_profile;
				$this->load->view('profile',$data);
			}
			catch (FacebookApiException $e) {
				//echo '<pre>' . htmlspecialchars(print_r($e, true)) . '</pre>';
				$this->login();
			}
		}
		else {
			$this->login();
		}
		
	}
	private function login() {
		$user = null;
		$data['facebook'] = $this->facebook;
		$this->load->view('login',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */