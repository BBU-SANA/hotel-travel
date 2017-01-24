<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signout extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

	}

	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			$this->session->sess_destroy();
			redirect('/admin');
    	}
		// elseif($this->session->userdata('logged_in')) 
		// {
    	// 	$this->session->sess_destroy();
		// 	redirect('/signin');
		// }
	}
}
