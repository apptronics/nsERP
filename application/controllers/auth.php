<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller 
{
	function __construct()
	{
	  parent::__construct();
	  $this->load->config('nscrm');
	}

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		$this->_header();
		$this->load->view('login_view');
		$this->_footer();
	}

	function _header()
	{
		$this->load->view('include/header');
	}

	function _footer()
	{
		$this->load->view('include/footer');
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
