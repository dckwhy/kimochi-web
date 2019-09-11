<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_data_helm extends MX_Controller {
    
    public function get_data_helm(){
        $cust_id = $this->input->post('cust_id');
        $this->db->where('id_cust', $cust_id);
        $this->db->where('status', 'proses');
        $data_helm = $this->db->get('kimochi_helm.data_helm')->result();
        
        foreach ($data_helm as $value) {
            $this->db->where('id', $value->id_layanan);
            $data_layanan = $this->db->get('kimochi_product.data_jasa')->row();

            $this->db->where('id_cust', $value->id_cust);
            $data_to = $this->db->get('kimochi_order.data_order')->row();
            
            $value->layanan = $data_layanan->judul_layanan;
            $value->harga = $data_layanan->harga;
            $value->id_to = $data_to->id_to;
            $value->sub_total = $data_to->sub_total;
        }
        echo json_encode($data_helm);
    }
    
    public function get_all_data_helm(){
        $cust_id = $this->input->post('cust_id');
        $this->db->where('id_cust', $cust_id);
        $this->db->where('status', 'proses');
        $data_helm = $this->db->get('kimochi_helm.data_helm')->result();
        
        foreach ($data_helm as $value) {
            if ($value->id_layanan != null) {
                $this->db->where('id', $value->id_layanan);
                $data_layanan = $this->db->get('kimochi_product.data_jasa')->row();

                $value->layanan = $data_layanan->judul_layanan;
            }else {
                $value->id_layanan = null;
            }
        }
        echo json_encode($data_helm);
	}
}
