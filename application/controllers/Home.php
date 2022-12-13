<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['_view'] = 'home/homecust';
		$this->load->view('layouts/home',$data);
	}
	public function about(){
		$data['_view'] = 'home/about';
		$this->load->view('layouts/home',$data);
	}
	public function contact(){
		$data['_view'] = 'home/contact';
		$this->load->view('layouts/home',$data);
	}
}
