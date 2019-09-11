<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_order extends MX_Controller {

	public function insert_data()
	{
		$data = $this->input->post();
		$date = date('Ymhs');

        $data['id_to'] = 'TO_'.$date;
        $data['waktu_proses'] = date('y-m-d H:i:s');
        $data['status'] = 'Proses';
        $data['status_payment'] = 'Belum Bayar';
		$data_insert = $this->db->insert('kimochi_order.data_order', $data);
		if ($data_insert) {
			$feedback['msg'] = 'success';
		}else {
			$feedback['msg'] = 'fail';			
		}
		echo json_encode($feedback);
	}
}
