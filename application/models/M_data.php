<?php
class M_data extends CI_Model{	

	function kebudayaan(){
			$this->db->select('nama');
			$this->db->from('kebudayaan');
			$query = $this->db->get();
			return $query->result_array();
	}
	
	function getpost($value) {
		$this->db->select('*');
		$this->db->from('pos');
		$this->db->where('kata',$value);
		$query = $this->db->get();
		return $query->row();
	}
	
	function getner($value){
			$this->db->select('*');
			$this->db->from('kebudayaan');
			$this->db->join("detail_kebudayaan","kebudayaan.id=detail_kebudayaan.id_kebudayaan","inner");
			$this->db->like('nama',$value);
			$query2 =$this->db->get();
			return $query2->row();
	}
	
	function getwisata(){
		$hasil= $this->db->query("SELECT * FROM kebudayaan INNER JOIN detail_kebudayaan ON kebudayaan.id=detail_kebudayaan.id_kebudayaan  where  katergori='tempat wisata'");
			if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}
	
	function wisata($where){
	$hasil=$this->db->query("select * from kebudayaan inner join detail_kebudayaan on kebudayaan.id = detail_kebudayaan.id_kebudayaan where id='$where' ");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}
		function getmakanan(){
	$hasil=$this->db->query("select * from kebudayaan inner join detail_kebudayaan on kebudayaan.id = detail_kebudayaan.id_kebudayaan where katergori='wisata kuliner' ");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
		}
		
		function getpakaian(){
	$hasil=$this->db->query("select * from kebudayaan inner join detail_kebudayaan on kebudayaan.id = detail_kebudayaan.id_kebudayaan where katergori='Pakaian' ");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
}

		function getlokasi($data){
		$hasil=$this->db->query("select * from kebudayaan inner join detail_kebudayaan on kebudayaan.id = detail_kebudayaan.id_kebudayaan where nama='$data' ");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
   }


}