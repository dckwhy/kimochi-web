<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kimochi extends MX_Controller {


	function antiInjection($str) {
		$r = stripslashes(strip_tags(htmlspecialchars($str, ENT_QUOTES)));
		return $r;
	}
	public function insert_helm(){
		$cust_id = $this->input->post('cust_id');
		$merk = $this->input->post('merk');
		$data = array('cust_id' => $cust_id,
			'merk' => $merk);

		if ($data) {
			$insert = $this->db->insert('kimochi_helm.data_helm', $data);
			$feedback_msg['auth_message'] = 'success';
			if($insert) {
				$get_data = $this->db->get('kimochi_helm.data_helm')->row();
				$feedback_msg['helm_id'] = $get_data->id;
			}
		} else {
			$feedback_msg['auth_message'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}
	public function insert_kondisi_helm(){
		$tempurung_luar = $this->input->post('tempurung_luar');
		$visor = $this->input->post('visor');
		$baut_kiri = $this->input->post('baut_kiri');
		$baut_kanan = $this->input->post('baut_kanan');
		$cust_id = $this->input->post('cust_id');
		$data_busa = $this->input->post('busa');
		$busa = implode($data_busa);


		$data = array('cust_id' => $cust_id,
			'tempurung_luar' => $tempurung_luar,
			'visor' => $visor,
			'baut_kiri' => $baut_kiri,
			'baut_kanan' => $baut_kanan,
			'busa' => $busa);
		
		if ($data) {
			$insert = $this->db->update('kimochi_helm.data_helm', $data);
			$feedback_msg['data_kondisi_helm'] = $data;
			$feedback_msg['auth_message'] = 'success';
			if($insert) {
				$get_data = $this->db->get('kimochi_helm.data_helm')->row();
				$feedback_msg['helm_id'] = $get_data->id;
			}
		} else {
			$feedback_msg['auth_message'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}

	public function insert_data_helm(){
		$cust_id = $this->input->post('cust_id');
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$merk = $this->input->post('merk');
		$lama_pemakaian = $this->input->post('lama_pemakaian');

		$data = array('jenis' => $jenis,
			'merk' => $merk,
			'lama_pemakaian' => $lama_pemakaian);

		if ($data) {
			$this->db->where('cust_id', $cust_id);
			$this->db->where('id', $id);
			$this->db->update('kimochi_helm.data_helm', $data);
			$feedback_msg['auth_message'] = 'success';
		} else {
			$feedback_msg['auth_message'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}
	public function insert_data_cust(){
		$data = $this->input->post();

		$alphanumb = '1234567890';
		$code = array(); 
		$alphaLength = strlen($alphanumb) - 1; 
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$code[] = $alphanumb[$n];
		}
		$code_cust = implode($code);
		$cust_id = array( 'CUST_', $code_cust);
		$data['cust_id'] = implode($cust_id);
		if ($data) {
			$this->db->insert('kimochi_customer.data_customer', $data);
			$feedback_msg['data_customer'] = $data;
			$feedback_msg['auth_message'] = 'success';
		} else {
			$feedback_msg['auth_message'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}

	public function get_helm()
	{	
		$cust_id = $this->input->post('cust_id');
		$this->db->where('cust_id', $cust_id);

		$data = $this->db->get('kimochi_helm.data_helm')->result();
		
		foreach ($data as $value) {
			if($value->tempurung_luar == null || $value->jenis == null){
				$value->msg = 'fail';
			} else {
				$value->msg = 'success';
			}
		}
		echo json_encode($data);
	}

	public function get_jumlah_data(){

		$this->db->select('count(id) as jumlah');
		$get = $this->db->get('kimochi_helm.data_helm')->row();
		
		echo $get->jumlah;
	}

	public function get_data_helm()
	{	
		$cust_id = $this->input->post('cust_id');
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->where('cust_id', $cust_id);

		$data = $this->db->get('kimochi_helm.data_helm')->row();

		if($data->tempurung_luar == null){
			$feedback_msg['auth_message'] = 'fail';
		} else {
			$feedback_msg['auth_message'] = 'success';
			$feedback_msg['data'] = $data;
		}
		echo json_encode($feedback_msg);
	}

	public function get_edit_helm()
	{
		$cust_id = $this->input->post('cust_id');
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->where('cust_id', $cust_id);

		$data = $this->db->get('kimochi_helm.data_helm')->row();

		if($data){
			$feedback_msg['auth_message'] = 'success';
			$feedback_msg['data'] = $data;
		} else {
			$feedback_msg['auth_message'] = 'fail';
		}
		echo json_encode($feedback_msg);	
	}
	public function delete_helm()
	{
		$cust_id = $this->input->post('cust_id');
		$this->db->where('cust_id', $cust_id);
		$this->db->order_by('id',"desc");
		$this->db->limit(1);

		$get_last = $this->db->get('kimochi_helm.data_helm')->row();
		$hasil = print_r($get_last);
		if($hasil){
			$feedback['auth_message'] = 'success';
			// $delete = $this->db->delete('kimochi_helm.data_helm', $get_last);
		} else{
			$feedback['auth_message'] = 'fail';
		}
		echo json_encode($feedback);
	}
}