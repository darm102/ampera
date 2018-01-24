<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {
	
	public function informasi_wisata($id){
		$where=$id;
		$data['wisata']=$this->M_data->wisata($where);
		$this->load->view("informasi/informasi-wisata",$data);
	}

	
}