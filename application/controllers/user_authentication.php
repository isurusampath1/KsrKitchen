<?php
//session_start(); //need to session start in order to access it through CI
class User_Authentication extends CI_Controller{
	
	public function __construct(){
		parent:: __construct();
		
		$this->load->model('User_Model');

		//load form helper library
		//$this->load->helper('form');
		
		//load form validation library
	// $this->load->library('form_validation');
		
		//load session library
		//$this->load->library('session');
		
		//load database
		//$this->load->model('login_database');
	}
	
	//show login page
	public function index(){
		
	
		$this->load->view('login2');
	}
	
	
	public function login()
	{
		//$this->session->sess_destroy();
		   
		$this->load->library('form_validation'); //form validation lib
		
		$this->form_validation->set_rules('user_username', 'User Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		 
		if ($this->form_validation->run() == FALSE)
        {
           $st = array('status' =>0,'validation' => validation_errors());
           echo json_encode($st);
		  
        }
        else
        {
			 
			$user_username=$this->input->post('user_username');
			$password=$this->input->post('password');

			//get user details by id
			$user_id_t=$this->User_Model->get_user($user_username,$password);
			//print_r($user_id_t);
			
			//echo $password;
			
			if(isset($user_id_t['user_id']))
			{
				
				$pages=$this->User_Model->get_user_pages($user_id_t['user_id']);	
				/*
				echo"-----------------";
				print_r($pages);*/
				$user_pages=array();
				
				foreach($pages as $row)
				{
					
					$user_pages[] =$row['page_id'];
					
				}
				/*echo"-----------------";
				print_r($user_pages);
				*/
				//print_r($pages);
				$user_id=$user_id_t['user_id'];
				
			}
			else
			{
			 $user_id=0;	
			}
			
			if($user_id){
				
				$ss_user_id=$user_id;
				$ss_group_id=$user_id_t['group_id'];
				$ss_user_username=$user_username;
				
				
				
			
				$sesdata = array(
                   'ss_user_username'  => $ss_user_username,
                   'ss_user_id'     => $ss_user_id,
                   'ss_group_id' => $ss_group_id,
				   'ss_status' => 1,
				   'ss_pages' => $user_pages,
				  
               );
			  
			  $this->session->set_userdata($sesdata); 
			 
				$st = array('status' =>1,'validation' =>'Done!');
				
			
		
            	echo json_encode($st);
			}
			else {
				$st = array('status' =>0,'validation' => validation_errors());
           		echo json_encode($st);
			}
		}
		
	}
	
	
	
	
	
	
	
	//check for user login process
	public function user_login_processfghhh(){
		$this->form_validation->set_rules('user_username', 'User Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if($this->form_validation->run() == FALSE){
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('admin page');
			}else{
				$this->load->view('login2');
			}
		}else{
			$data=array('username' => $this->input->post('username'),'password'=>$this->input->post('password'));
			$result=$this->login_database->login($data);
			
			if($result== TRUE){
				$username = $this->input->post('username');
				$result = $this->login_database->read_user_information($username);
				if ($result != false) {
					$sub_session=array(
					'page' => '1',
					'function' => '2',
					);
					$session_data = array(
					'username' => $result[0]->user_name,
					'email' => $result[0]->user_email,
					'sub' => $sub_session,
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$this->load->view('admin_page');
				}else{
					$data = array(
					'error_message' => 'Invalid Username or Password'
					);
					$this->load->view('login_form', $data);
				}
			}
		}
	}
	
	// Logout from admin page
	public function logout() {

		// Removing session data
		///$sess_array = array(
		//'username' => '',
		//);
		//$this->session->unset_userdata('logged_in', $sess_array);
		$this->session->sess_destroy();
		//$data['message_display'] = 'Successfully Logout';
		header('Refresh: 0;url='.base_url('user_authentication'));
		
		//$this->load->view('login2', $data);
	}

}
?>