<?php
class M_admin extends CI_Model{	
	function tampil_data(){		
		$hasil=$this->db->get('pelangan');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}
	function cari_username($where,$table){
		$hasil=$this->db->get_where($table,$where);
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}
	function tampil_username(){
		$hasil=$this->db->query('select username from pelangan');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}
	function tampil_password(){
		$hasil=$this->db->query('select password from pelangan');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}
	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
		
	}
	function delete_data($where,$table)
	{
		
				$this->db->where($where);
				$this->db->delete($table);
		
	}
	function edit_data($where,$table)
	{
		
				return $this->db->get_where($table,$where);
		
	}
	function update_data($where,$data,$table)
	{
				$this->db->where($where);
				$this->db->update($table,$data);
	
		
	}
	
	function jumlah_data(){
		return $this->db->get('pelangan')->num_rows();
	}
		function data($number,$offset){
		return $query = $this->db->get('pelangan',$number,$offset)->result();		
	}
	
	function cek_login($table,$where){
			return $this->db->get_where($table,$where);
		
	}
}