<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *"); 

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		// $admin_auth = $this->session->userdata('admin_auth');
		// if(!$admin_auth){
		// 	redirect(base_url('authenticate'));
		// }
	}

	public function index()
	{ 
		$data['konten'] = $this->load->view('home/form', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function form()
	{ 
		$data['konten'] = $this->load->view('home/form', NULL, TRUE);
		$this->load->view ('admin/main_admin', $data);
	}
	public function update_content(){
		$data = $this->input->post();

		$date = date('ymhs');
		if(move_uploaded_file(
			$_FILES['foto_file_first']['tmp_name'],
			'./prabotan/image/banner/'.'banner1_'.$date.'.'.pathinfo($_FILES['foto_file_first']['name'], PATHINFO_EXTENSION)
		)){ 
			$file  = 'banner1_'.$date.'.'.pathinfo($_FILES['foto_file_first']['name'], PATHINFO_EXTENSION); 	
			$data['home_carousel_first'] = $file;
			
		}
		if(move_uploaded_file(
			$_FILES['foto_file_second']['tmp_name'],
			'./prabotan/image/banner/'.'banner2_'.$date.'.'.pathinfo($_FILES['foto_file_second']['name'], PATHINFO_EXTENSION)
		)){ 
			$file  = 'banner2_'.$date.'.'.pathinfo($_FILES['foto_file_second']['name'], PATHINFO_EXTENSION); 	
			$data['home_carousel_second'] = $file;
			
		}
		if(move_uploaded_file(
			$_FILES['foto_file_third']['tmp_name'],
			'./prabotan/image/banner/'.'banner3_'.$date.'.'.pathinfo($_FILES['foto_file_third']['name'], PATHINFO_EXTENSION)
		)){ 
			$file  = 'banner3_'.$date.'.'.pathinfo($_FILES['foto_file_third']['name'], PATHINFO_EXTENSION); 	
			$data['home_carousel_third'] = $file;
			
		}

		// nama file e kamu padakno mangkane seakan2 dia yang nyimpen 1 
		// padahal yang kesimpen ono 3 
		// cuma nama file e sama 
		// begitchu 
		// udah kan 
		// bye <3
		// wkwkwkwkwkwkwkwkwkwk
		// iku file e lek nama e sama ndek folder e ke replace jadi yang kesimpan cuma 1 
		// wes iso a 
		// updatenya aja
		// nampilnone kan gampang 
		// iy
		// dik aku krungu suaramu lohh
		//yu path e ga onok nd prabotan/image/banner

		// unset dipake kalo nama yang di kirim dari html berbeda sama nama fieldnya
		// kalo sama gausah pake unset 

		unset($data['foto_file_first']);
		unset($data['foto_file_second']);
		unset($data['foto_file_third']);
		$update = $this->db->update('setting_web', $data); 
		if($update){
			$feedback['msg'] = 'success';
		}else{
			$feedback['msg'] = 'fail';
		}

		echo json_encode($feedback);
	}
	public function upload_img_summernote(){
		$data = $this->input->post();

		$allowed = array( 'png', 'jpg', 'gif' );
		if( isset($_FILES['file']) && $_FILES['file']['error'] == 0 ) {
			$extension = pathinfo( $_FILES['file']['name'], PATHINFO_EXTENSION );
			if( !in_array( strtolower( $extension ), $allowed ) ) {
				echo 'AN ERROR OCCURED - INVALID IMAGE';
				exit;
			}
			if( move_uploaded_file( $_FILES['file']['tmp_name'], 'prabotan/image/banner/'.$_FILES['file']['name'] ) ) {
				echo base_url().'prabotan/image/banner/'.$_FILES['file']['name']; 
				exit;
			}
		}
		echo 'AN ERROR OCCURED';
		exit;
	}
}
