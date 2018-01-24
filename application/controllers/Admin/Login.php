<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
		if($this->session->userdata('username')!=null){
			redirect('admin/home');
		}
		else {
			
		}
        $this->load->Model('Model_log');
    }

	public function index() {
		if($this->input->post()){
			$nama=$this->input->post('username');
			$password =$this->input->post('password');
			$data=$this->Model_log->cek($nama,$password);
			if($data!=null){
				foreach($data as $data1){
					
						$this->Model_log->update1($nama);
						$this->session->set_userdata('username', $nama);
						print_r($this->session->userdata); 
						redirect('admin/home');
				}
					
			}
			else{	
					$this->session->set_userdata('login-notif','Maaf Username dan Password Salah');
					redirect('admin/login');
				}
		}
		else{
			$this->load->view('admin/login');
		}
		
		
	}
	
}

	


?>
