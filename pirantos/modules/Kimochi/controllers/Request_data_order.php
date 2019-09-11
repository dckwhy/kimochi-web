<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_data_order extends MX_Controller {
    
    public function get_data_order(){
        $cust_id = $this->input->post('cust_id');
        $this->db->where('id_cust', $cust_id);
        $this->db->where('status', 'Selesai');
        $this->db->where('status_payment', 'Belum Bayar');
        $data_order = $this->db->get('kimochi_order.data_order')->result();
        
        foreach ($data_order as $value) {
            $value->date_selesai = date('H:i', strtotime($value->waktu_selesai)).' WIB';
        }
        echo json_encode($data_order);
	}

    public function get_all_order(){
        
        $this->db->where('status', 'Proses');
        
        $data_order = $this->db->get('kimochi_order.data_order')->result();
        foreach ($data_order as $value) {
            $value->date_order = date('H:i', strtotime($value->waktu_proses)).' WIB';

            $this->db->where('id_cust', $value->id_cust);
            $data_cust = $this->db->get('kimochi_customer.data_customer')->result();
            foreach ($data_cust as $val) {
                $value->cust_name = $val->nama_cust;
                $value->cust_no_hp = $val->nohp_cust;
            }
        }

        echo json_encode($data_order);
    }
}