<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_user($data){
		$this->db->insert('users', $data);
		return $insert_id = $this->db->insert_id();
	}
	
	public function get_user_details($u_id){
		$this->db->select('*')->from('users');
		$this->db->where('id',$u_id);
		return $this->db->get()->row_array();
	}
	
	public  function update_payment_details($u_id,$data){
		$this->db->where('id',$u_id);
    	return $this->db->update("users",$data);
	}
		
	
	/* out souce lab chating */
	

}