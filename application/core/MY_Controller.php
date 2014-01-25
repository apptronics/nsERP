<?php
class MY_Controller extends CI_Controller
{
	function __construct()
	{
	  parent::__construct();
	  $this->config->load('nscrm');
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
