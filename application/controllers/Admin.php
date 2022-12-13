<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_model');
	}

	function index(){
		$data['members'] = $this->Admin_model->get_all_members();
		$data['_view'] = 'admin/dashboard';
		$this->load->view('layouts/staffDashboard',$data);
	}

	public function login()
	{
		$data['_view'] = 'admin/login';

		$this->form_validation->set_rules('adminEmail','Email','required');
		$this->form_validation->set_rules('adminPassword','Password','required|min_length[5]');

		if($this->form_validation->run() == false)
		{
			

			$this->load->view('layouts/staffDashboard',$data);
		}
		else
		{
			$email = $this->input->post('adminEmail');
			$password = $this->input->post('adminPassword');
			$userInfo = $this->Admin_model->login($email,$password);

			if($userInfo)
			{
				$userData = array(
					'adminId' => $userInfo['adminId'],
					'adminEmail' => $email,
					'logged_in' => TRUE
				);

				$this->session->set_userdata($userData);
				$this->session->set_flashdata('userLoggedIn', 'Log In Successful');

				redirect('admin');
			}
			else
			{
				$this->session->set_flashdata('login_failed', 'Invalid Username and Password');
                redirect('test/testerror');
			}
		}
	}


}