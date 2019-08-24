<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_data_helm extends MX_Controller {
    
    public function get_data_helm(){
        $cust_id = $this->input->post('cust_id');
        $this->db->where('cust_id', $cust_id);
        $data_helm = $this->db->get('kimochi_helm.data_helm')->result();
        
        foreach ($data_helm as $value) {
            $this->db->where('id', $value->layanan_id);
            $data_layanan = $this->db->get('kimochi_product.data_layanan')->row();

            $value->layanan = $data_layanan->nama_layanan;
            $value->harga = $data_layanan->harga;
        }
        echo json_encode($data_helm);
	}
}
