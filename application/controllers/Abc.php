<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Abc extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('userId')){
			redirect('pnc');
		}
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->library('User_model');
	}

	function index(){
		$data['_view'] = 'dashboard';
		$this->load->view('layouts/main',$data);
	}

	function validateRegister(){
		$this->form_validation->set_rules('fname','FName','required|min_length[1]|max_length[25]|callback_username_exists');
		$this->form_validation->set_rules('lname','LName','required|min_length[1]|max_length[25]|callback_username_exists');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required|min_length[5]');
		$this->form_validation->set_rules('phone','Phone','required|min_length[10]');
		$this->form_validation->set_rules('address','Address', 'required');

		if($this->form_validation->run()){
			$verification_key = md5(rand());
			$encrypted_password = $this->encrypt->encode($this->input->post('custPassword'));
			$data = array(
				'custFName' => $this->input->post('custFName'),
				'custLName' => $this->input->post('custLName'),
				'custEmail' => $this->input->post('custEmail'),
				'custPassword' => $encrypted_password,
				'custPhone' => $this->input->post('custPhone'),
				'verification_key' => $verification_key,
				'custAddress' => 'BM'
			);

			$id = $this->User_model->insertData($data);
			if($id > 0){
				$subject = "Please verify email for login";
				$message = "
				<p>Hi ".$this->input->post('user_name')."</p>
    			<p>This is email verification mail from Codeigniter Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."register/verify_email/".$verification_key."'>link</a>.</p>
    			<p>Once you click this link your email will be verified and you can login into system.</p>
    			<p>Thanks,</p>
    			";

    			$config = array(
    			'protocol'  => 'smtp',
     			'smtp_host' => 'smtpout.secureserver.net',
     			'smtp_port' => 80,
     			'smtp_user'  => 'xxxxxxx', 
                'smtp_pass'  => 'xxxxxxx', 
     			'mailtype'  => 'html',
     			'charset'    => 'iso-8859-1',
                'wordwrap'   => TRUE
    			);

    			$this->load->library('email',$config);
    			$this->email->set_newline("\r\n");
    			$this->email->from('verify@mylaundry');
    			$this->email->to($this->input->post('custEmail'));
    			$this->email->subject($subject);
    			$this->email->message($message);
    			if($this->email->send()){
    				$this->session->set_flashdata('message','Check you email for verification');
    			}
			}
		}
		else{
			$this->load->view('error');
		}
	}

	function verify_mail(){
		if($this->uri->segment(3)){
			$verification_key = $this->uri->segment(3);
			if($this->User_model->verify_mail($verification_key)){
				$data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'login">here</a></h1>';
			}
			else{
				$datab['message'] = '<h1 align="center">Invalid Link</h1>';
			}
			$this->load->view('email_verification',$data);
		}
	}

	function loadRegister(){
		$this->load->view('users/register');
	}
	function loadLogin(){
		$data['_view'] = 'users/login';
		$this->load->view('layouts/main',$data);
	}

	function validateLogin(){
		$this->form_validation->set_rules('custEmail','Email','required|trim|valid_email');
		$this->form_validation->set_rules('custPassword','Password','required');

		if($this->form_validation->run()){
			$result = $this->User_model->can_login($this->input->post('custEmail'), $this->input->post('custPassword'));

			if($result == ''){
				redirect('pnc');
			}
			else{
				$this->session->set_flashdata('message',$result);
				redirect('abc/loadLogin');
			}
		}
		else{
			$this->index();
		}
	}
}

?>