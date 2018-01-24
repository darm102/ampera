<?php
class M_datadmin extends CI_Model{	

	function input_data_admin($data,$table)
	{
		$this->db->insert($table,$data);
		
		
	}

}