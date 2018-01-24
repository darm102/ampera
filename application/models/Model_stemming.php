<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_stemming extends CI_Model {
	
    function __construct() {
        parent::__construct();
    }
	
	public function stopword($data){
		$this->db->select('stopword');
		$this->db->from('stopword');
		$this->db->where('stopword',$data);
		$query = $this->db->get();
		return $query->result();
	}
	public function katadasar($kata){
		$this->db->select('kata');
		$this->db->from('kata_dasar');
		$this->db->where('kata',$kata);
		$query = $this->db->get();
		return $query->result();
	}
	public function katadasar1(){
		$this->db->select('kata');
		$this->db->from('kata_dasar');
		//$this->db->where('kata',$kata);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_mhs($term) {
        $this->db->from('account');
		$this->db->where('level',2); 
		$this->db->where('id like"'.$term.'%"');
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) { //jika ada maka jalankan
            return $query->result();
        }
    }
	public function insert_doc($input){
		$this->db->insert('doc1', $input);
		return;
	}
	//public function doc(){
	//	$this->db->from('doc');
    //    $query = $this->db->get();    
    //    return $query->result();
	//}
}
?>