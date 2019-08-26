<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller {

	public function get_profile(){
		$profile = $this->db->get('data_cashier')->row();
		$profile->photo = base_url('prabotan/image/photo/'.$profile->photo);

		echo json_encode($profile);
	}

	public function update_profile(){
		$data = $this->input->post();
		$date = date('Y');
		$id = $data['id'];
		if(move_uploaded_file(
			$_FILES['foto_file']['tmp_name'],
			'./prabotan/image/photo/'.'photo'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION)
			))
		{ 	
			$file = 'photo'.$date.'.'.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION);  
			$data['photo'] = $file;
		}
		unset($data['foto_file']);

		$this->db->where('id', $id);
		$update = $this->db->update('data_cashier', $data);

		if ($update) {
			$feedback_msg['msg'] = 'success';
		}else{
			$feedback_msg['msg'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}
}