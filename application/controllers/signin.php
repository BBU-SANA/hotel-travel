<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('default-front');
	}

	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect('/');
    	}
		else{
			$this->load->view('pages/signin');
			$this->output->set_title('User Sgin In');

			$this->load->js('assets/js/social-signin-signup.js');
    	}
	}
}
