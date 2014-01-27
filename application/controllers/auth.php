<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

		$this->_header();
		$this->load->view('login_view');
		$this->_footer();

	}

	public function logout()
	{
		$this->session->userdata = array();
        $this->session->sess_destroy();
		redirect('/auth/login', 'refresh');
	}

	//로그인 인증 처리
	public function authentication()
	{
		$this->_header();

		$authentication = $this->config->item('authentication');		
		if(	$this->input->post('userid') == $authentication['userid'] &&
			$this->input->post('password') == $authentication['password']) 
		{
			$this->session->set_userdata('logged_in', true);
			redirect("/schedule/view", 'refresh');

		} else {
			$this->session->set_flashdata('message', "로그인에 실패했습니다");
			redirect('auth/login');
		}
		$this->_footer();
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
