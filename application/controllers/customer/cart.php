<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('customer/cart');
	}

}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */
