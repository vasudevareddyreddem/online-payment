<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->library('zend');
		$this->load->library('zend');
		$this->load->model('Home_model');
		
		}
	public function index()
	{	
		
		if($this->uri->segment(3)!=''){
			$u_id=base64_decode($this->uri->segment(3));
			$data['details']=$this->Home_model->get_user_details($u_id);
		}else{
			$data['details']=array();
		}
		
		//echo '<pre>';print_r($data);exit;
		$this->load->view('html/index',$data);
	}
	
	public  function post(){
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$details=array(
		'name'=>isset($post['name'])?$post['name']:'',
		'email'=>isset($post['email'])?$post['email']:'',
		'mobile'=>isset($post['mobile'])?$post['mobile']:'',
		'alt_mobile'=>isset($post['alternate_mobile'])?$post['alternate_mobile']:'',
		'project'=>isset($post['project'])?$post['project']:'',
		'amount'=>isset($post['amount'])?$post['amount']:'',
		'pay'=>isset($post['pay_amount'])?$post['pay_amount']:'',
		'due'=>isset($post['due_amount'])?$post['due_amount']:'',
		'other'=>isset($post['others'])?$post['others']:'',
		'address'=>isset($post['address'])?$post['address']:'',
		'create_at'=>date('Y-m-d H:i:s'),
		);
		if(isset($post['u_id'])&& $post['u_id']!=''){
			$save=$this->Home_model->update_payment_details($post['u_id'],$details);
		}else{
			$save=$this->Home_model->save_user($details);
		}
		if(count($save)>0){
			$this->session->set_flashdata('success',"Hospital Representative details are successfully updated");
			if(isset($post['u_id'])&& $post['u_id']!=''){
			redirect('payment/index/'.base64_encode($post['u_id']));
			}else{	
				redirect('payment/index/'.base64_encode($save));
			}			
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('home');
		}
		//echo '<pre>';print_r($post);exit;
	}
	
	
	
}
