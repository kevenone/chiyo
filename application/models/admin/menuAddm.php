<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuAddm extends CI_Model {

	/*public $variable;*/

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getClass()
	{
		$query=$this->db->get('class');
		$data=$query->result_array();
		return $data;
	}

	public function addMenu($data='')
	{
		$query=$this->db->insert('menu', $data);

		return $query;
	}

	

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>