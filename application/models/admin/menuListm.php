<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuListm extends CI_Model {

	/*public $variable;*/

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getMenu($num=0)
	{
		$data['num']= $this->db->count_all('menu'); 

		$query=$this->db->get('menu',10,$num);

		$data['res']=$query->result_array();

		return $data;
	}

	public function updataMenu($data="",$condition="")
	{
		$query = $this->db->update('menu', $data, $condition);
		return $query;
	}

	public function dele($acondition='')
	{

		$query =$this->db->delete('menu', $acondition);

		return $query;
	}

	public function udMS($data='', $condition='')
	{
		$query = $this->db->update('menu', $data, $condition);
		return $query;
	}

	public function classMenu($cid='',$num=0)
	{
		$where = array('cID' => $cid);
		
		$data['num']=$this->db->get_where('menu', $where) -> num_rows();

		$query = $this->db->get_where('menu', $where, 10, $num);

		$data['res'] = $query ->result_array();

		return $data;

	}
	
	

}

/* End of file mlogin.php */
/* Location: ./application/models/mlogin.php */ ?>