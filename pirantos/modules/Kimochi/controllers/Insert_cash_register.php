<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_cash_register extends MX_Controller {

	public function insert_data(){
        $data = $this->input->post();
        
        $data['tgl'] = date('Y-m-d H:i:s');
		$data_insert = $this->db->insert('kimochi_keuangan.data_keuangan', $data);
		if ($data_insert) {
            $feedback['msg'] = 'success';
		}else {
			$feedback['msg'] = 'fail';			
		}
		echo json_encode($feedback);
	}
}
