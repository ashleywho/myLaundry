<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function login($email, $password){

			$this->db->where('adminEmail' , $email);
			$this->db->where('adminPassword' , $password);

            $result = $this->db->get('admin');
            return $result->row_array();
    }

    function get_all_members(){
    	$this->db->order_by('adminId','desc');
    	$this->db->where('adminId', $this->session->userdata['adminId']);

    	return $this->db->get('admin')->result_array();
    }
}