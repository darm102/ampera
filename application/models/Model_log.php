<?php
class Model_log extends CI_Model{	
	function __construct() {
        parent::__construct();
    }
	public function cek($username,$password){
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
        $query=$this->db->get();
		return $query->row();
	}
	
	public function cek2($username){
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('status','1');
        $query=$this->db->get();
		return $query->row();
	}
	
	public function update1($username){
		$data = array (
			'status' => 1,
		);
		$this->db->where('username',$username);
		$this->db->update('admin',$data);
		
	}
}