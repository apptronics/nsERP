<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends MY_Controller 
{
	function __construct()
	{
	  parent::__construct();
	  $this->load->model('customer_model');
	}

	public function index()
	{
		$customers = $this->customer_model->gets();
		$this->_header();
		$this->load->view('customer_list_view', array('customers'=>$customers));
		$this->load->view('main_view');
		$this->_footer();
	}

	public function detail_view($id)
	{
		$customers = $this->customer_model->gets();
		$customer = $this->customer_model->get($id);
		$this->_header();
		$this->load->view('customer_list_view', array('customers'=>$customers));
		$this->load->view('customer_get_view', array('customer'=>$customer));
		$this->_footer();
	}
	
}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */