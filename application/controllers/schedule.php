<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedule extends MY_Controller 
{
	function __construct()
	{
	  parent::__construct();
	}

	public function index()
	{
		$this->view();
	}

	// http://arshaw.com/fullcalendar/
	public function view()
	{
		$this->_header();
		$this->load->view('schedule_view');
		$this->_footer();
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
