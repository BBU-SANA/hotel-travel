<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('default-back');
	}

	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			$this->load->view('admin/dashboard/index');
			$this->load->view('admin/dashboard/model');
			$this->output->set_title('Booking Room');
    	}
		elseif($this->session->userdata('logged_in'))
		{
			redirect('member/dashboard/');
		}
		else{
    		redirect('admin');
    	}
	}
}
