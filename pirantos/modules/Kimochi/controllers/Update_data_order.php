<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_data_order extends MX_Controller {

	public function update_data()
	{
		$data = $this->input->post();

        $data['waktu_selesai'] = date('y-m-d H:i:s');
        $data['status'] = 'Selesai';

        unset($data['to_id']);

        $this->db->where('id_cust', $data['id_cust']);
        $this->db->where('id_to', $data['id_to']);
		$data_insert = $this->db->update('kimochi_order.data_order', $data);
		if ($data_insert) {
			$feedback['msg'] = 'success';
		}else {
			$feedback['msg'] = 'fail';			
		}
		echo json_encode($feedback);
	}
}
