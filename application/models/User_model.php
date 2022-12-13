<?php
	class User_model extends CI_Model{

		public function __construct() {
			parent::__construct();
		}

		/*
	    * Get user by id
	    */
	    public function get_user($id)
	    {
	        return $this->db->get_where('users',array('id'=>$id))->row_array();
	    }
	        
	    /*
	     * Get all users
	     */
	    public function get_all_users()
	    {
	        $this->db->order_by('custId', 'desc');
	        return $this->db->get('customer')->result_array();
	        
	    }

	    /*
     	* function to update user
     	*/
	    public function update_user($id,$params)
	    {
	        $this->db->where('custId',$id);
	        return $this->db->update('customer',$params);
	    }
	    
	    /*
	     * function to delete user
	     */
	    public function delete_user($id)
	    {
	        return $this->db->delete('customer',array('custId'=>$id));
	    }

		public function register($enc_password){
			//user data array
			$fname = $this->input->post('custFName');
			$lname = $this->input->post('custLName');
			
            $nm = ucfirst($fname);
            $nm1 = ucfirst($lname);

			 $data = array (
			 	'custFName' => $nm,
			 	'custLName' => $nm1,
			 	'custEmail' => $this->input->post('custEmail'),
			 	'custPassword' => $enc_password,
			 	'custPhone' => $this->input->post('custPhone'),
			 	'custAddress' => 'Bukit Mertajam',
			 	//'custAddress' => $this->input->post('custAddress'),
			 	'roleId' => '2'
			 );
			 
			 $this->db->insert('customer', $data); 
			
		}

		
		//Insert user
		public function login($email, $password){

			$this->db->where('custEmail' , $email);
			$this->db->where('custPassword' , $password);

            $result = $this->db->get('customer');
            return $result->row_array();
        }

        public function search_user($key) {

            $this->db->select('*');
            $this->db->from('users');
            $this->db->like('name',$key);
            $this->db->or_like('phone',$key);
            $query = $this->db->get();
            if($query->num_rows()>0){
                return $query->result_array();
            }else{
            	// die();
            	return $query->result();
            }
        }

    //      public function list()
    // {

    //     // $cart = $this->cart_model->get_cart($id);
    //     $this->db->join('users', 'users.id = members.user_id');
    //         // $this->db->select('username, type, post_image');
    //         // $this->db->from('cart');
    //         // $this->db->where('status', "available");

    //         $query = $this->db->get('users');
    //         return $query->result_array();
    // }

        public function uname_exists($username)
		{
			$this->db->where('username',$username);
			$query = $this->db->get('users');
			
            if (empty($query->row_array())) {
                return true;
            } else {
                return false;
            }

		    // $this->db->where('username',$key);
		    // $query = $this->db->get('users');
		    // if ($query->num_rows() > 0){
		    //     return true;
		    // }
		    // else{
		    //     return false;
		    // }
		}     

        public function mail_exists($email)
		{
		    $this->db->where('email',$email);
		    $query = $this->db->get('users');
		    // if ($query->num_rows() > 0){
		    //     return true;
		    // }
		    // else{
		    //     return false;
		    // }

		    if (empty($query->row_array())) {
                return true;
            } else {
                return false;
            }
		}   
 

		public function get_profile(){
            $query = $this->db->get_where('users',array('id' => $this->session->userdata['user_id']));
            return $query->row_array();
        }  

 
		// public function update_password($pw){
		// 	$data = array(
		// 		'password' => $pw
		// 	);

		// 	// print_r($this->session->userdata['user_id']);
		// 	// die();

		// 	$this->db->update('users', $data, array('id' => $this->session->userdata['user_id']));
		// }


		public function check_password_match($password){
			$query = $this->db->get_where('users', array('password' => $password,'id' => $this->session->userdata['user_id']));
			if (empty($query->row_array())) {
			return false;
			}else
			return true;
		}
// latest
		public function update_forget_password($pw){
            // $email = $this->input->post('email');
            // $phone = $this->input->post('phone');
            $data = array(
                'password' => $pw
            );
             $this->db->update('users', $data, array('id' => $this->session->userdata['user_id']));
        }

		// public function forgot_pwd($ic){
		// 	$query = $this->db->get_where('users', array('ic' => $ic,'id' => $this->session->userdata['user_id']));
		// 	if (empty($query->row_array())) {
		// 	return false;
		// 	}else
		// 	return true;
		// }


		function insertData($data){
			$this->db->insert('customer',$data);
			return $this->db->insert_id();
		}

		function verify_mail($key){
			$this->db->where('verification_key',$key);
			$this->db->where('is_email_verified','no');
			$query = $this->db->get('customer');
			if($query->num_rows > 0){
				$data = array(
					'is_email_verified' => 'yes'
				);

				$this->db->where('verification_key',$key);
				$this->db->update('customer',$data);
				return true;
			}
			else{
				return false;
			}
			
		}

		function can_login($email,$password){
			$this->db->where('custEmail',$email);
			$query = $this->db->get('customer');
			if($query->num_rows() > 0){
				foreach($query->result() as $row){
					if($row->is_email_verified == 'yes'){
						$store_password = $this->encrypt->decode($row->custPassword);
						if($password == $store_password){
							$this->session->set_userdata('custId', $row->custId);
						}
						else{
							return 'Wrong Password';
						}
					}
					else{
						return 'Verify your email address';
					}
				}
			}
			else{
				return 'Wrong Email';
			}
		}
}