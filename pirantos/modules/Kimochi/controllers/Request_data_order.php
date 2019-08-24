<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_data_order extends MX_Controller {
    
    public function get_data_order(){
        $cust_id = $this->input->post('cust_id');
        $this->db->where('cust_id', $cust_id);
        $this->db->where('status', 'selesai');
        $data_order = $this->db->get('kimochi_transaction.data_order')->result();
        
        foreach ($data_order as $value) {
            $value->date_selesai = date('H:i', strtotime($value->date_selesai)).' WIB';
        }
        echo json_encode($data_order);
	}
}
