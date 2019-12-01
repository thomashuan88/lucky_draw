<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lucky_draw extends CI_Controller 
{

	public function __construct() {
		parent::__construct();
		$this->config->load('lucky_draw');
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
				$name = $this->security->get_csrf_token_name();
				$hash = $this->security->get_csrf_hash();
				echo '{"status":"true","csrfname":"'.$name.'","csrfhash":"'.$hash.'"}';
				return;
			}			
		}

		echo '{"status":"false"}';
		return;
	}

	public function save_luckydraw() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required||is_unique[userinfo.phone]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('qq', 'QQ', 'trim|min_length[5]|max_length[10]|integer');
		$this->form_validation->set_rules('wechat', 'Wechat', 'trim|min_length[4]|max_length[50]|alpha_numeric');

        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]); return;
        } else {
			$this->load->model('Userinfo_model');
			$draw_result = $this->draw_result();
			$data = array(
				"username" => $this->input->post("username"),
				"phone" => $this->input->post("phone"),
				"email" => $this->input->post("email"),
				"qq" => $this->input->post("qq"),
				"wechat" => $this->input->post("wechat"),
				"ipaddress" => $this->input->ip_address(),
				"draw_result" => $draw_result
			);
			if ($this->userinfo_model->insert_ld($data)) {
				echo json_encode(['status'=>'success','draw_result'=>$draw_result]); return;
			} 
    		echo json_encode(['status'=>'fail']); return;
        }

	}

	public function draw_result() {
		$lucky_list = $this->config->item('ld_misc')['lucky_list'];
		$ri = array_rand($lucky_list);
		return $lucky_list[$ri];
	}

	public function showtest() {
		$field_pattern = $this->config->item('ld_misc')['lucky_list'];
		print_r($field_pattern); 
	}
}
