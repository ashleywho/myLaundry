<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User_model');
	}

	function index()
	{
		$data['_view'] = 'login';
		$this->load->view('layouts/home',$data);

	}

	public function login()
	{
		$data['_view'] = 'users/login';

		$this->form_validation->set_rules('custEmail','Email','required');
		$this->form_validation->set_rules('custPassword','Password','required|min_length[5]');

		if($this->form_validation->run() == false)
		{
			

			$this->load->view('layouts/home',$data);
		}
		else
		{
			$email = $this->input->post('custEmail');
			$password = $this->input->post('custPassword');
			$userInfo = $this->User_model->login($email,$password);

			if($userInfo)
			{
				$userData = array(
					'custId' => $userInfo['custId'],
					'roleId' => $userInfo['roleId'],
					'custFName' => $userInfo['custFName'],
					'custLName' => $userInfo['custLName'],
					'email' => $email,
					'logged_in' => TRUE
				);

				$this->session->set_userdata($userData);
				$this->session->set_flashdata('userLoggedIn', 'Log In Successful');

				redirect('test');
			}
			else
			{
				$this->session->set_flashdata('login_failed', 'Invalid Username and Password');
                redirect('test/testerror');
			}
		}
	}

	function register()
	{
		//$data['title'] = 'Sign Up';
		//$data['_view'] = 'users/register';
		$this->form_validation->set_rules('custEmail','Email','required');
		$this->form_validation->set_rules('custPassword','Password','required|min_length[5]');
		$this->form_validation->set_rules('custFName','FName','required');
		$this->form_validation->set_rules('custLName','LName','required');
		$this->form_validation->set_rules('custPhone','Phone','required|min_length[10]');
		

		if ($this->form_validation->run() === false)
		{
			//$this->load->view('layouts/headerloginreg',$data);
			$this->load->view('users/register');
			/*$this->load->view('users/register',$data);*/
		}
		else
		{
			$enc_password = $this->input->post('custPassword');

			$this->User_model->register($enc_password);

			$this->session->set_flashdata('user_registered', 'You are now registered. You can log in now.');
			redirect('test');
		}
	}

	function testOutput(){
		redirect('test');
	}
}



// $data['title'] = 'Sign Up';

// 			$this->form_validation->set_rules('name', 'Name', 'required');
// 			$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]|is_unique[users.username]|callback_username_exists');
// 			$this->form_validation->set_rules('email', 'Email', 'trim|required|callback_email_exists');
// 			$this->form_validation->set_rules('gender', 'Gender', 'required');
// 			$this->form_validation->set_rules('phone', 'Mobile Phone', 'required|numeric|max_length[11]');
// 			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
// 			$this->form_validation->set_rules('password2', 'Confirm Password', 'required|min_length[5]|matches[password]');
// 			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');	

// 			if($this->form_validation->run() === FALSE){ 

// 			$this->load->view('templates/header');
// 			$this->load->view('users/register', $data);
// 			$this->load->view('templates/footer');
// 			} else{

// 				$enc_password = $this->input->post('password');

// 				$this->user_model->register($enc_password); 
// 				// var_dump($test);
// 				// die();
				
// 				$this->session->set_flashdata('user_registered', 'You are now registered. You can log in now.');
// 				redirect('users/register');
