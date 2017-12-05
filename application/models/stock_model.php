<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stock_Model extends CI_Model {

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
	
	
	 function get_all_store_item()
	
	{
		$this->db->select("items.*");
		$this->db->select("brand.brand_name");
		$this->db->select("category.category_name");
		$this->db->select("unit.unit_name");
		 $this->db->select_sum('store_item.qty');
		$this->db->from("items");
		$this->db->join('store_item','items.id=store_item.item_id','left');
		$this->db->join('brand','items.brand_id=brand.id','left');
		$this->db->join('category','items.item_catogory=category.id','left');
		$this->db->join('unit','items.unit_id=unit.id','left');
		
		$this->db->group_by('items.id','asc');
		$query=$this->db->get();
		return $query->result_array();
		
		
		
	}
	
	function save_item($data)
	{
	
		$result=$this->db->insert("items",$data);
        
        return $result;
	
	}
	
	function get_next_ref_no_add_item()
	{
		 $this->db->select_max('id');
	  return $this->db->get('items');
		
	}
	

}

?>