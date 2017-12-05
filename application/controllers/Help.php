<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

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
   						
						$this->load->view('Help');
					 
					 } 
					 else
					 {
						header('Refresh: 0;url='.base_url('user_authentication/logout')); 
					 }					
					
					
				}
		
		
	}
	