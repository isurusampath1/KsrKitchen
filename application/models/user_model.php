<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }
	
    function get_user($email, $pwd) {
        $encripted_password = hash('sha512', $pwd);
		$this->db->where('user_name', $email);
        $this->db->where('password', $encripted_password);
        $query = $this->db->get('login');
       // print_r($query->row_array());
		return $query->row_array();
    }



    // get user
    function get_user_by_id($id) {
        $this->db->where('user_id', $id);
        $query = $this->db->get('login');
        return $query->result();
    }
	
	function get_user_pages($user_id)
	{
		$this->db->select('page_id');
		$this->db->from('user_authentication');
		$this->db->where('user_id',$user_id);
		
		$query=$this->db->get();
		return $query->result_array();
		
	}
   
}

?>