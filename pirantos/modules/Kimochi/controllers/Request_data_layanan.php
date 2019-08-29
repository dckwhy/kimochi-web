<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_data_layanan extends MX_Controller {
    
    public function get_layanan(){
        $data_layanan = $this->db->get('kimochi_product.data_layanan')->result();
        
        foreach ($data_layanan as $value) {

        }
        echo json_encode($data_layanan);
    }
    
}
