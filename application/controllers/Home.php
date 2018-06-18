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
		$this->load->view('html/index');
	}
	
	public  function post(){
		$post=$this->input->post();
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
		
		$save=$this->Home_model->save_user($details);
		if(count($save)>0){
			$this->session->set_flashdata('success',"Hospital Representative details are successfully updated");
			redirect('payment/index/'.base64_encode($save));	
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('home');
		}
		//echo '<pre>';print_r($post);exit;
	}
	
	
	
}
