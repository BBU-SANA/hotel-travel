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
        $this->load->view('pages/room');
        $this->output->set_title('Booking Room');
	}
}
