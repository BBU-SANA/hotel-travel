<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {

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
        $this->load->view('pages/location');
        $this->output->set_title('Booking Room');
	}
}
