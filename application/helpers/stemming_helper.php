<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	$ci=& get_instance();
	$ci->load->model('Model_stemming');
	
	// kata yang belum bisa
	//berumput teramah mengurang  mengebom pengurang pengebom
	//function katadasar(){
	//	$ci=& get_instance();
	//	$ci->load->model('Model_stemming');
	//	$data1=$ci->Model_stemming->katadasar1();
	//	
	//	foreach($data1 as $stemming1){
	//		$stemming[]=$stemming1->kata;
	//	}
	//	return $stemming;
	//}
	function hapus_partikel($word,$stemming){
		//global $data1;
		//print_r($data1);
		//foreach($data1 as $stemming1){
		//	$stemming[]=$stemming1->kata;
		//}
		if(strlen($word)>4){
			if(in_array($word,$stemming)==false){
				$belakang=substr($word,-3);
			
				if($belakang=='kah' or $belakang=='lah' or $belakang=='pun' ){
					$kata=substr($word,0,-3);
					return $kata;
				}
		
				else{
					return $word;
				}
			}
			else{
				return $word;
			}
		}
		else{
			return $word;
		}
	
	}
	function hapuspp($word,$stemming){
		//global $data1;
		//foreach($data1 as $stemming1){
		//		$stemming[]=$stemming1->kata;
		//	}
		if(strlen($word)>4){
			if(in_array($word,$stemming)==false){
		
				$belakang1=substr($word,-2);
				$belakang=substr($word,-3);
				if($belakang1=='ku' or $belakang1=='mu'){
					$kata=substr($word,0,-2);
					return $kata;
				}
				else if($belakang=='nya'){
					$kata=substr($word,0,-3);
					return $kata;
				}
				else{
					return $word;
				}
			}
			else{
				return $word;
			}
		}
		else{
			return $word;
		}
	}
	
	function hapus_awalan1p1($word,$stemming){
		if(strlen($word)>4){
			$depan2=substr($word,0,2);
			if($depan2=='di' or $depan2=='me' or $depan2=='ke'){
				$kata=substr($word,2);
				return $kata;
			}
			else{
				return $word;
			}
		}
		else{
			return $word;
		}
	}
	function hapus_awalan1p2($word,$stemming){
		if(strlen($word)>4){
			$depan2=substr($word,0,4);
			if($depan2=='meng' or $depan2=='peng'){
				if(substr($word,4,1)=='u' or substr($word,4,1)=='e' or substr($word,4,1)=='i' or  substr($word,4,1)=='o'){
					$kata=substr_replace($word,'k',0,4);
					return $kata;
				}
				else{
					return $word;
				}
			}
			else{
				return $word;
			}
		}
		else{
			return $word;
		}
	}
	
	function hapus_awalan1($word,$stemming){
		if(strlen($word)>4){
			$depan=substr($word,0,4);
			$depan1=substr($word,0,3);
			$depan2=substr($word,0,2);
			$awal=substr($word,4,1);
			$awal2=substr($word,3,1);
			if($depan=='meng' or $depan=='peng'){
				$kata=substr($word,4);
				return $kata;
			}
			else if($depan=='meny' or $depan=='peny'){
				$kata=substr_replace($word,'s',0,4);
				return $kata;
			
			}
			else if($depan1=='mem' or $depan1=='pem'){
				if($awal2=="a" or $awal2=="i" or $awal2=="e" or $awal2=="u" or $awal2=="o"){
					$kata=substr_replace($word,'p',0,3);
					return $kata;
				}
				else{
					$kata=substr($word,3);
					return $kata;
				}
			}
			else if($depan1=='ter' or $depan1=='pem'){
				$kata=substr($word,3);
				return $kata;
			
			}
			else if($depan1=='men' or $depan1=='pen'){
				if($awal2=="a" or $awal2=="i" or $awal2=="e" or $awal2=="u" or $awal2=="o"){
					$kata=substr_replace($word,'t',0,3);
					return $kata;
				}
				else{
					$kata=substr($word,3);
					return $kata;
				}
			}
			else if($depan2=='di' or $depan2=='me' or $depan2=='ke'){
				$kata=substr($word,2);
				return $kata;
			}
			else{
				return $word;
			}
		}
		else{
			return $word;
		}
	}
	
	//function hapus_awalan2($word){
	//	$depan=substr($word,0,3);
	//	if($depan=='men' or $depan=='mem' or $depan=='pen' or $depan=='ter' or $depan=='pem'){
	//		$kata=substr($word,3);
	//		return $kata;
	//	
	//	}
	//	else{
	//		return $word;
	//	}
	//}
	function hapus_awalan2p1($word,$stemming){
	
	}
	function hapus_awalan2($word,$stemming){
		//$depan=substr($word,0,3);
		//$depan1=substr($word,0,2);
		//global $data1;
		//foreach($data1 as $stemming1){
		//
		//	$stemming[]=$stemming1->kata;
		//	
		//}
		if(strlen($word)>4){
			if(in_array($word,$stemming)==false){
				if(substr($word,0,3)=="ber"){
					$kata = substr($word,3);
				}
				else if(substr($word,0,3)=="bel"){
					$kata = substr($word,3);
				}
				else if(substr($word,0,2)=="be"){
					$kata = substr($word,2);
				}
				else if(substr($word,0,3)=="per" && strlen($word) > 5){
					$kata = substr($word,3);
				}
				else if(substr($word,0,3)=="pel"  && strlen($word) > 5){
					$kata = substr($word,3);
				}
				else if(substr($word,0,2)=="pe"  && strlen($word) > 5){
					$kata = substr($word,2);
				}
				else if(substr($word,0,2)=="se"  && strlen($word) > 5){
					$kata = substr($word,2);
				}
				else{
					$kata=$word;
				}
			}else{
				$kata=$word;
			}
			return $kata;
		}
		else{
			return $word;
		}
	}
	
	
	function hapus_akhiran($word,$stemming){
		if(strlen($word)>4){
			$belakang=substr($word,-3);
			$belakang1=substr($word,-2);
			$belakang2=substr($word,-1);
			if(in_array($word,$stemming)==false){
				if($belakang=='kan'){
					$kata=substr($word,0,-3);
					return $kata;
				
				}
				else if($belakang1=='an'){
					$kata=substr($word,0,-2);
					return $kata;
				}
				else if($belakang2=='i'){
					$kata=substr($word,0,-1);
					return $kata;
				}
				else{
					//$kata='pergi';
					$kata=$word;
				}
				return $kata;
			}
			else{
				return $word;
			}
		}
		else{
			return $word;
		}
	}
	function stemmword1($word,$stemming){
		//$word=hapus_akhiran(hapus_awalan2(hapus_awalan1p1(hapuspp(hapus_partikel($word,$stemming),$stemming),$stemming),$stemming),$stemming);
		
		$data=hapus_partikel($word,$stemming);
		if(strlen($data)>4){
			$data=hapuspp($data,$stemming);
			if(strlen($data)>4){
				$data=hapus_awalan1p1($data,$stemming);
				if(strlen($data)>4){
					$data=hapus_awalan2($data,$stemming);
					if(strlen($data)>4){
						$data=hapus_akhiran($data,$stemming);
						return $data;
					}
					else{
						return $data;
					}
				}
				else{
					return $data;
				}
			}
			else{
				return $data;
			}
		}
		else{
			return $word;
		}
		
	}
	function stemmword2($word,$stemming){
		//$word=hapus_akhiran(hapus_awalan2(hapus_awalan1p2(hapuspp(hapus_partikel($word,$stemming),$stemming),$stemming),$stemming),$stemming);
		$data=hapus_partikel($word,$stemming);
		if(strlen($data)>4){
			$data=hapuspp($data,$stemming);
			if(strlen($data)>4){
				$data=hapus_awalan1p2($data,$stemming);
				if(strlen($data)>4){
					$data=hapus_awalan2($data,$stemming);
					if(strlen($data)>4){
						$data=hapus_akhiran($data,$stemming);
						return $data;
					}
					else{
						return $data;
					}
				}
				else{
					return $data;
				}
			}
			else{
				return $data;
			}
		}
		else{
			return $word;
		}
		
	}
	function stemmword3($word,$stemming){
		//$word=hapus_akhiran(hapus_awalan2(hapus_awalan1(hapuspp(hapus_partikel($word,$stemming),$stemming),$stemming),$stemming),$stemming);
		$data=hapus_partikel($word,$stemming);
		if(strlen($data)>4){
			$data=hapuspp($data,$stemming);
			if(strlen($data)>4){
				$data=hapus_awalan1($data,$stemming);
				if(strlen($data)>4){
					$data=hapus_awalan2($data,$stemming);
					if(strlen($data)>4){
						$data=hapus_akhiran($data,$stemming);
						return $data;
					}
					else{
						return $data;
					}
				}
				else{
					return $data;
				}
			}
			else{
				return $data;
			}
		}
		else{
			return $word;
		}
		
	}
	
	//function totalstem($v){
	//	$stemming=katadasar();
	//	if(!in_array($v,$stemming,true)){
	//					
	//		$word=stemmword1($v,$stemming);
	//		if(!in_array($word,$stemming,true)){
	//			$word=stemmword2($v,$stemming);
	//			if(!in_array($word,$stemming,true)){
	//				$word=stemmword3($v,$stemming);
	//				if(!in_array($word,$stemming)){
	//					$word=$v;
	//				}else{
	//					//do nothing;
	//				}
	//			}
	//			else{
	//				$word=$v;
	//			}
	//		}else{
	//			$word=$v;
	//		}
	//		$baru[]=$v;
	//	}
	//	else{	
	//		$baru[]=$v;		
	//	}
	//	return $baru;
	//
	//}