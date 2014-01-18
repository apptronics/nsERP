<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends MY_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('frontpage');
      $this->load->view('include/footer');
	}
	
	public function say()
	{

		$this->load->spark('example-spark/1.0.0');      # We always specify the full path from the spark folder
		$this->example_spark->printHello();             # echo's "Hello from the example spark!"
	}   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
