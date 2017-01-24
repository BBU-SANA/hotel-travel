<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Users_model');

		$this->load->helper('url');

	}

	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect('admin/dashboard/');
    	}
		elseif($this->session->userdata('logged_in'))
		{
			redirect('member/dashboard/');
		}
		else{
    		$this->load->view('admin/signin');
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
		$username = $this->input->post('username');
		$password = $this->__encrip_password($this->input->post('password'));

		$is_valid = $this->Users_model->validate($username, $password);

		if($is_valid)
		{
			$data = array(
				'username' => $username,
				'is_logged_in' => true,
				'is_member' => false,
				'language' => $language

			);
			$this->session->set_userdata($data);
			redirect('admin/dashboard/');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('admin/signin', $data);
		}
	}
}
