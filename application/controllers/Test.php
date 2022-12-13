<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		
		$data['_view'] = 'dashboard';
		$this->load->view('layouts/main',$data);
		
	}

	function testError(){
		$data['_view'] = 'error';
		$this->load->view('layouts/main',$data);
	}
} 
