<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('display_date_time_format'))
{
   function display_date_time_format($datetime)
   {
	   return date('d/m/Y  H:i A', strtotime($datetime)); //$dateTime->format("d/m/y  H:i A"); 
	   
   }  
}

if ( ! function_exists('asset_url'))
{
   function asset_url($type=0)
   {
	   return base_url().'thems/';
	   
   }  
}


 	function image_url($type=0)
   {
	   return base_url().'thems/images';
	   
   }
   
   function premition($sub_menu_name)
   {
	   $CI = & get_instance();  //get instance, access the CI superobject
	   
	  if($CI->session->userdata('ss_user_group_name') and $CI->session->userdata('ss_user_group_name')=='Sale mStaff')
	 return true;
   }
   
   
   
   function is_logged_in() {
		// Get current CodeIgniter instance
		$CI =& get_instance();
		// We need to use $CI->session instead of $this->session
		$ss_user_id = $CI->session->userdata('ss_user_id');
		//echo "uid:".$user_id;
		if ($ss_user_id) { 
			return true;
			//redirect(base_url(),'refresh');
		} else { return false; }
	}
      
?>