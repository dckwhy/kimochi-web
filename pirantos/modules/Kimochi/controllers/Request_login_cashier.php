<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_login_cashier extends MX_Controller {

	public function login()
	{
		$user = $this->input->post('login-username');
		$pass = $this->input->post('login-password');
		$feedback_msg['auth'] = 'log';

		$get = $this->db->query("SELECT * FROM data_cashier WHERE username = '$user' AND password = '$pass'");
		$hasil = $get->row();

		if ($hasil) {
			unset($hasil->password);
			$feedback_msg['login_data'] = $hasil;
			$feedback_msg['auth_message'] = 'success';
		} else {
			$feedback_msg['auth_message'] = 'fail';
		}
		echo json_encode($feedback_msg);
	}
}
