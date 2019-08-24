<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_customer extends MX_Controller {

	public function insert_data(){
		$data = $this->input->post();
		$date = date('Ymd');

		$data['cust_id'] = 'CST_'+$date;
		$data_insert = $this->db->insert('kimochi_customer.data_customer', $data);
		if ($data_insert) {
			$feedback['msg'] = 'success';
		}else {
			$feedback['msg'] = 'fail';			
		}
		echo json_encode($feedback);
	}
}
