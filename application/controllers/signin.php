<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('member_model');

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('default-front');
	}

	public function index()
	{
		if($this->session->userdata('is_logged_in') OR $this->session->userdata('logged_in')){
			redirect('/');
    	}
		else{
			$this->load->view('pages/signin');
			$this->output->set_title('User Sgin In');

			$this->load->js('assets/js/social-signin-signup.js');
    	}
	}

	/**
    * encript the password
    * @return mixed
    */
    function __encrip_password($password) {
        return md5($password);
    }

	/**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials()
	{

		$email = $this->input->post('email');
		$password = $this->__encrip_password($this->input->post('password'));

		$is_valid = $this->member_model->validate($email, $password);

		if($is_valid)
		{
			$data = array(
				'email' => $email,
				'is_member' => true,
				'logged_in' => true,

			);
			$this->session->set_userdata($data);
			redirect('member/dashboard/');
		}
		else // incorrect username or password
		{
			$data['login'] = TRUE;
			$this->load->view('pages/signin', $data);
		}
	}
}
