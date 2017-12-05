<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catogory_Model extends CI_Model {

    function __construct() {
        parent::__construct();
		header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
die();
}



       
    }
	
	
	 function get_all_category_item()
	
	{
		$this->db->select("category_name,id");
	
		$this->db->from("category");
		$this->db->where('status',"1");		
		$this->db->group_by('category_name','asc');
		$query=$this->db->get();
		return $query->result_array();
		
		
		
	}
	
	function save_item($data)
	{
	
		$result=$this->db->insert("items",$data);
        
        return $result;
	
	}
	

}

?>