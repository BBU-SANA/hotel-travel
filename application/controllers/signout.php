<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signout extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

	}

	public function index()
	{
    $this->session->sess_destroy();
		redirect('/');
	}
}
