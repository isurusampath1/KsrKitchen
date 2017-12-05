<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Stock_Model');
		$this->load->library('form_validation');
		$this->load->model('Catogory_Model');
		$this->load->model('Unit_Model');
		
		
		if($this->session->userdata('ss_status'))
		 		{
			
			
		}
		else
		{
			header('Refresh: 0;url='.base_url('user_authentication'));
			
		}
		 
		 
		 
	 
		
	}
	
	
	
	public function index()
	
	{ 
		;
		
		if($this->session->userdata('ss_status'))
		 		{
					
					
					 if (in_array('1', $this->session->userdata('ss_pages'), true)) 
					 {
   						
						$this->load->view('View_Stock_Details');
					 
					 } 
					 else
					 {
						header('Refresh: 0;url='.base_url('user_authentication/logout')); 
					 }					
					
					
				}
		
		
	}
	
	public function Update_Stock_Levels()
	{
		
		if($this->session->userdata('ss_status'))
		 		{
					
					
					 if (in_array('2', $this->session->userdata('ss_pages'), true)) 
					 {
   						
						$this->load->view('Update_Stock_Levels');
					 
					 } 
					 else
					 {
						header('Refresh: 0;url='.base_url('user_authentication/logout')); 
					 }					
					
					
				}	
		
	}
	
	
	public function add_items()
	{
	
	 $data['main_category']=$this->Catogory_Model->get_all_category_item();
	 $data['unit_type']=$this->Unit_Model->get_all_unit_item();
	 
	 
	 $this->load->view('add_items', $data);	
		
		
		
		
	}
	
	
	
	
	public function get_all_item()
	
	{
		$list=$this->Stock_Model->get_all_store_item();
		//print_r($list);
		$data=array();
		$temp='';
		
		foreach ($list as $row)
		
		{
			$nested=array();
			$nested[]=$row['item_code'];
			$nested[]=$row['item_name'];
			$nested[]=$row['brand_name'];
			$nested[]=$row['category_name'];
			$nested[]=$row['unit_name'];
			$nested[]=$row['qty'];
			$nested[]=$row['critical_level'];
			$actdes='';
	        $actdes =$actdes. '<div class="btn-group text-left">
                            <button data-toggle="dropdown" class="btn btn-default btn-xs btn-primary dropdown-toggle" type="button">Actions <span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu pull-right">
                            <li><a href="'.base_url('products/view').'/'.$temp.'"><i class="fa fa-file-text-o"></i> Product Details</a></li>
							';
						
                        $actdes =$actdes. '    <li><a href="'.base_url('products/edit').'/'.$temp.'"><i class="fa fa-edit"></i> Edit Product</a></li>
							<li class="divider"></li><li><a onclick="product_delete('.$temp.'); return false;" href="#"><i class="fa fa-trash-o"></i> Delete Product</a></li>
							';
						
						$actdes = $actdes.'	
                            <li><a onclick=" print_barcode('.$temp.'); return false;" href="#"><i class="fa fa-print"></i> Print Barcode</a></li>
                            
                            </ul></div>';
							
					$nested[] =$actdes;	
			$data[]=$nested;
			
		}
		
		$json_data = array( 'data'=>$data );
		
		echo json_encode($json_data); 
		
	}
	
	
	
	
	
	public function save_item()
	{
		$query   		= $this->Stock_Model->get_next_ref_no_add_item();
        $result  		= $query->row();
        $reference_no		= sprintf("PD%05d", $result->id+1);
	
    
        $this->form_validation->set_rules('item_name', 'Item Name', 'required');
      
        $this->form_validation->set_rules('product_price', 'Unit Price', 'required');
       
        $this->form_validation->set_rules('alert_quty', 'alert quty', 'required');
		



        if ($this->form_validation->run() == FALSE)
        {
           $st = array('status' =>0,'validation' => validation_errors());
           echo json_encode($st);
        }
        else
        {
        	$product_name 			= $this->input->post('item_name');
        	$category 	  			= $this->input->post('category');
        	$subcategory  			= $this->input->post('subcategory');
        	$brand 					= $this->input->post('brand');
			$unit 		  			= $this->input->post('unit');
			$product_price 			= $this->input->post('product_price');
			$alert_quty 			= $this->input->post('alert_quty');
			 $product_max_qty=$this->input->post('product_max_qty');
			$product_details 		= $this->input->post('product_details');
			$store_position=$this->input->post('store_position');
        	
        	
        	
        	$data=array(
			'item_name'=>$product_name,
			'item_catogory'=>$category,
			'item_code'=>$reference_no,
			'sub_catogory'=>$subcategory,			
			'brand_id'=>$brand,
			'unit_id'=>$unit,
			'critical_level'=>$alert_quty,
			'max_level'=>$product_max_qty,			
			'possion'=>$store_position,
			'unit_price'=>$product_price,
			'item_description'=>$product_details,
			
		);
        
        	
			$result=$this->Stock_Model->save_item($data);
			if($result==1)
			{
				 $response = array(
		
		'status'=>1,
		'message'=>"Item Saved"
		
		
		);
		
		echo json_encode($response);
				
				
			}
			else
			{
				 $response = array(
		
		'status'=>0,
		'message'=>"Somthing went to wrong!. please contact system administration"
		
		
		);
		
		echo json_encode($response);
				
			}
			
			
			 
		
		}
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
