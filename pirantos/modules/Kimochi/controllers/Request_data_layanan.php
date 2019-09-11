<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_data_layanan extends MX_Controller {
    
    public function get_layanan(){
        $data_layanan = $this->db->get('kimochi_product.data_jasa')->result();
        
        foreach ($data_layanan as $value) {

        }
        echo json_encode($data_layanan);
    }

    public function get_list_layanan(){
        $cust_id = $this->input->post('cust_id');

        $this->db->where('id_cust', $cust_id);
        $this->db->where('status', 'proses');
        $get_data_helm = $this->db->get('kimochi_helm.data_helm')->result();

        foreach ($get_data_helm as $value) {
            $this->db->where('id', $value->id_layanan);
            $get_layanan = $this->db->get('kimochi_product.data_jasa')->result();

            foreach ($get_layanan as $val) {
                $value->nama_layanan = $val->judul_layanan; 
                $value->harga = $val->harga; 
            }
        }
        echo json_encode($get_data_helm);
    }
    
}
