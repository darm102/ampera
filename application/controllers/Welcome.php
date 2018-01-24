<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome');
	}
	
	public function token(){
		$data=$this->input->get("search");
		$data1 = preg_replace('/\s+/', ' ', $data); 
		$kalimat=strtolower($data1);
		$data = array( 
		'budaya'=> $this->M_data->kebudayaan()
		);
		//print_r($data['budaya']);
    foreach($data['budaya'] as $value){ 
	//print_r($value);
      if(preg_match('/\s/',$value['nama'])==1){ 
       $replacedata = preg_replace('/\s+/', '@', $value['nama']); 
       $kalimat = str_replace($value['nama'],$replacedata,$kalimat);
      }
    }
	
    $tanda['informasi']=preg_split("/ +/ ",$kalimat);
	
    foreach ($tanda['informasi'] as $value) { 
    $value = str_replace("@"," ",$value);
    $tanda['newinformasi'][] = $value;
   }
		$this->getpos($tanda);
	//print_r($tanda['newinformasi']);
	}
	
	public function getpos($tanda){
	foreach($tanda['newinformasi'] as $value){ //catatan (saya ubah dari $tanda['informasi'] menjadi $tanda['newinformasi'] )
		$datapos=$this->M_data->getpost($value);
		if($this->M_data->getpost($value)==null){
			if($this->M_data->getner($value)==null){
				

						$tanda['listpos'][]="other";
				
			}
			else{
				$dataner=$this->M_data->getner($value);
				$tanda['listpos'][]=$dataner->katergori;
			}


	}
			else{
				$tanda['listpos'][]=$datapos->list_pos;
			}

	}
		//$value=implode(" ",$tanda['listpos']);
		//echo $value;

		$this->getanswer($tanda);


}

	public function getanswer($tanda){
		$tanya=array("siapa","apa","kapan","dimana");
		$katadepan=array_shift($tanda['newinformasi']);
		$unik=array_unique($tanda['listpos']);
		//$value=implode(" ",$tanda['listpos']);
		
		if($katadepan=="siapa" || $katadepan=="apa" || $katadepan=="kapan" || $katadepan="dimana"){
				if($katadepan=="apa"){
					if(end($tanda["newinformasi"])=="palembang"&& in_array("wisata",$tanda['newinformasi'],TRUE) ){
						$tanda["jawab"]=$this->M_data->getwisata();
						$this->jawab_wisata($tanda);
					}else if(end($tanda["newinformasi"])=="palembang" && in_array("makanan",$tanda['newinformasi'],TRUE) || in_array("kuliner",$tanda['newinformasi'],TRUE) ){
						$tanda["jawab"]=$this->M_data->getmakanan();
						$this->jawab_makanan($tanda);
					}else if(end($tanda["newinformasi"])=="palembang"  && in_array("pakaian",$tanda['newinformasi'],TRUE) && in_array("adat",$tanda['newinformasi'],TRUE ) || in_array("daerah",$tanda['newinformasi'],TRUE) ) {
						$tanda["jawab"]=$this->M_data->getpakaian();
						$this->jawab_pakaian($tanda);
					}
					
				}else if ($katadepan=="dimana"){
					if(in_array("lokasi",$tanda['newinformasi'],TRUE) && in_array("tempat wisata",$tanda['listpos'],TRUE) ){
						
						$tanda["jawab"]=$this->M_data->getlokasi($data);
						$this->jawab_lokasi($tanda);
					}
				}
		}

		
	}
	
	public function jawab_wisata($tanda){
			$this->load->view("hasil/tempat-wisata",$tanda);
	}
	
	public function jawab_makanan($tanda){
		$this->load->view("hasil/makanan",$tanda);
	}
	public function jawab_pakaian($tanda){
		$this->load->view("hasil/pakaian",$tanda);
	}
	
	public function jawab_lokasi ($tanda){
		$this->load->view("hasil/lokasi",$tanda);
	}


}
