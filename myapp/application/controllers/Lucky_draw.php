<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lucky_draw extends CI_Controller 
{

	public function __construct() {
		parent::__construct();
  		// $this->load->library('form_validation');
	}

	public function index()	{
		$this->load->model('Userinfo_model');

		// print_r($this->Userinfo_model->getUsers());
		$this->load->view('lucky_draw');
	}

	public function sendotp() {
		$phone = $this->input->post('phone');
		
		if (preg_match("/^[0-9-()+]{3,20}$/", $phone)) {
			
			// process send otp
			// generate random 6 number and pass to sms gateway
			$otp = 123456;
			// process send otp

			if ($otp) {
				$this->session->set_userdata(array(
					'user_phone' => $phone,
					'otc' => $otp
				));
				echo '{"status":"true","user_phone":"'.$phone.'","otc":"'.$otp.'"}';
				return;
			}			
		}


		echo '{"status":"false"}';
		return;
	}

	public function show_session() {
		print_r($this->session->userdata); 
	}
}
