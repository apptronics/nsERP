<?php if (!defined('BASEPATH')) die();
class Auth extends MY_Controller 
{
	function __construct()
	{
	  parent::__construct();
	}

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		$this->load->view('include/header');
		$this->load->view('login_view');
		$this->load->view('include/footer');
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
