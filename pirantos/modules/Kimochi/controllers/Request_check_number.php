<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_check_number extends MX_Controller {

	public function check_number(){
        $phone_number = $this->input->post('phone_number');
        
        $this->db->where('no_hp', $phone_number);
        $get_data_customer = $this->db->get('kimochi_customer.data_customer')->row();

        if (count($get_data_customer) == 0) {
            $feedback['msg'] = 'not found';
        }else {
            $feedback['msg'] = 'found';
            $feedback['data'] = $get_data_customer;
        }
        echo json_encode($feedback);
    }
}