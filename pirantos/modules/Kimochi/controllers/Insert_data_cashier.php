<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_data_cashier extends MX_Controller {

	public function insert_data(){
        $data = $this->input->post();
        
        $to_id = $this->input->post('to_id');
		$data_insert = $this->db->insert('kimochi_transaction.data_transaction', $data);
		if ($data_insert) {
            $feedback['msg'] = 'success';
            
            $status['status_payment'] = 'Lunas';
            $this->db->where('id_to', $to_id);
            $this->db->update('kimochi_order.data_order', $status);
		}else {
			$feedback['msg'] = 'fail';			
		}
		echo json_encode($feedback);
	}
}
