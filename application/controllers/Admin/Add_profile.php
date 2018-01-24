<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class add_profile extends CI_Controller {

	public function __construct() {
        parent::__construct();
		if($this->session->userdata('username')!=null){
			
		}
		else {
			redirect('admin/home');	
		}
       
		$this->load->Model('M_datadmin');
    }

	public function index() {
		if($this->input->post()){
			$nama=$this->input->post('nama');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$input=array(
						'nama_admin'=>$nama,
						'username'=>$username,
						'password'=>$password,
						'status'=>0
			);
			$table='admin';
			$this->M_datadmin->input_data_admin($input,$table);
			$this->session->set_flashdata('message','data berhasil di upload');
			redirect('admin/add_profile');
			
			
		}
			
		else{
			$this->session->set_userdata('content', 'add_profile');
			$this->load->view('admin/home.php');
			
		
		
		
	}
	
}

}


?>
