<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedule extends MY_Controller 
{
	function __construct()
	{
	  parent::__construct();
	}

	public function index()
	{
		$this->view_schedule();
	}

	public function view_schedule()
	{
		$this->_header();

		var_dump($this->session->all_userdata());

		if($this->session->userdata('is_login'))
		{
			echo "로그인 완료";
		} else {
			echo "로그인 안함";
		}



		$this->_footer();
	}



	
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
