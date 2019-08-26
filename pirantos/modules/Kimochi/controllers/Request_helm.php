<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_helm extends MX_Controller {
    
    public function get_data_helm(){
        $cust_id = $this->input->post('cust_id');
        $this->db->where('cust_id', $cust_id);
        $this->db->where('status', 'proses');
        $data_helm = $this->db->get('kimochi_helm.data_helm')->result();
        
        foreach ($data_helm as $value) {
            
        }
        echo json_encode($data_helm);
	}
}
