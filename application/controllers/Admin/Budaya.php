<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Budaya extends CI_Controller {

	public function __construct() {
        parent::__construct();
		if($this->session->userdata('username')!=null){
			
		}
		else {
			redirect('admin/login');
		}
		$config['upload_path'] = './file/';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
        $this->load->Model('M_datadmin');
    }

	public function index() {
		if($this->input->post()){
			$this->upload->do_upload('pdfFile');
			$upload_data1 = $this->upload->data();
			print_r($upload_data1);
			$nama=$this->input->post('nim');
			$lokasi=$this->input->post('judul');
			$kategori=$this->input->post('topik');
			$keterangan=$this->input->post('keterangan');
			$input = array (
					
					'lokasi' => $lokasi,
					'katergori' => $kategori,
					'gambar' => $upload_data1['file_name'],
					'keterangan'=>$keterangan,
					'slug'=>slug($nama,true)
					);
			$table='detail_kebudayaan';
			$this->M_datadmin->input_data_admin($input,$table);
			$input1=array('nama'=>$nama);
			$table1='kebudayaan';
			$this->M_datadmin->input_data_admin($input1,$table1);
			$this->session->set_flashdata('message','data berhasil di kirim');
			redirect('admin/budaya');
		}
			
		else{
			$this->session->set_userdata('content', 'budaya');
			$this->load->view('admin/home');
		}
		
		
	}
	
}

	


?>
