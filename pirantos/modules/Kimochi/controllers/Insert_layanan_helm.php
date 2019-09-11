<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_layanan_helm extends MX_Controller {
    
    public function insert_layanan(){
        $cust_id = $this->input->post('cust_id');
        $id_helm = $this->input->post('id_helm');
        $id_layanan ['id_layanan']= $this->input->post('id_layanan');

        $this->db->where('id_cust', $cust_id);
        $this->db->where('id', $id_helm);
        $update = $this->db->update('kimochi_helm.data_helm', $id_layanan);

        if ($update) {
            $feedback['msg'] = 'success';
        }else{
            $feedback['msg'] = 'fail';
        }
        echo json_encode($feedback);
    }
    
}
