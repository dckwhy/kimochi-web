<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_data_order extends MX_Controller {
    
    public function get_data_order(){
        $cust_id = $this->input->post('cust_id');
        $this->db->where('cust_id', $cust_id);
        $this->db->where('status', 'selesai');
        $this->db->where('status_payment', 'Belum Bayar');
        $data_order = $this->db->get('kimochi_transaction.data_order')->result();
        
        foreach ($data_order as $value) {
            $value->date_selesai = date('H:i', strtotime($value->date_selesai)).' WIB';
        }
        echo json_encode($data_order);
	}

    public function get_all_order(){
        
        $this->db->select('kimochi_customer.data_customer.nama, kimochi_customer.data_customer.no_hp, kimochi_transaction.data_order.cust_id, kimochi_transaction.data_order.id_to, kimochi_transaction.data_order.date_proses');
        $this->db->from('kimochi_customer.data_customer');
        $this->db->join('kimochi_transaction.data_order', 'kimochi_customer.data_customer.cust_id = kimochi_transaction.data_order.cust_id');
        $data_order = $this->db->get()->result();

        echo json_encode($data_order);
    }
}