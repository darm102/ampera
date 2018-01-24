<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
		if($this->session->userdata('username')!=null){
			
		}
		else {
			redirect('admin/login');
		}
        //$this->load->Model('Model_log');
    }
	

	public function index() {
	$this->load->view('admin/home');
		
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('admin/login');
	}
	
	}
	
	

	


?>
