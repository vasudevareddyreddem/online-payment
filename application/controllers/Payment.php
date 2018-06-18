<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once ('razorpay-php/Razorpay.php');
use Razorpay\Api\Api as RazorpayApi;
class Payment extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->model('Home_model');
		$this->load->library('pdf');
		//https://github.com/razorpay/razorpay-php
		}
	public function index()
	{
		
		$u_id=base64_decode($this->uri->segment(3));
		$details=$this->Home_model->get_user_details($u_id);
		
		if(count($details)>0){
		
			//echo '<pre>';print_r($details);exit;
			//exit;
			$data['user_details']=$details;
			$api_id= $this->config->item('keyId');
			$api_Secret= $this->config->item('API_keySecret');
			$api = new RazorpayApi($api_id,$api_Secret);
			//$api = new RazorpayApi($this->config->load('keyId'), $this->config->load('API_keySecret'));
			$orderData = [
					'receipt'         => $details['id'],
					'amount'          => $details['pay'], // 2000 rupees in paise
					'currency'        => 'INR',
					'payment_capture' => 1 // auto capture
			];

				$razorpayOrder = $api->order->create($orderData);
				$razorpayOrderId = $razorpayOrder['id'];
				$displayAmount = $amount = $orderData['amount'];
				$displayCurrency=$orderData['currency'];
				$data['details'] = [
							"key"               => $api_id,
							"amount"            => $amount,
							"name"              => $details['name'],
							"description"       => $details['project'],
							"image"             => "",
							"prefill"           => [
							"name"              => $details['name'],
							"email"             => $details['email'],
							"contact"           => $details['mobile'],
							],
							"notes"             => [
							"address"           => $details['address'],
							"merchant_order_id" => $details['id'],
							],
							"theme"             => [
							"color"             => "#F37254"
							],
							"order_id"          => $razorpayOrderId,
							"display_currency"          => $orderData['currency'],
				];
			
				$this->load->view('html/pay',$data);
			
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('home');
		}
	}
	
	public  function success(){
	
			
			$post=$this->input->post();
			//echo '<pre>';print_r($post);
			if($post['u_id']!=''){
				$details=$this->Home_model->get_user_details($post['u_id']);
				//echo '<pre>';print_r($details);exit;
				if(count($details)>0){
			
					$post=$this->input->post();
							$data['user_details']=$details;
							$path = rtrim(FCPATH,"/");
							$file_name =$details['project'].'_'.$details['id'].'.pdf';
							$pdfFilePath = $path."/assets/invoices/".$file_name;
							ini_set('memory_limit','320M'); // boost the memory limit if it's low <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
							$html =$this->load->view('html/invoice',$data, true); // render the view into HTML
							//echo '<pre>';print_r($html);exit;
							$this->load->library('pdf');
							$pdf = $this->pdf->load();
							$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date('M-d-Y')); // Add a footer for good measure <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
							$pdf->SetDisplayMode('fullpage');
							$pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list
							$pdf->WriteHTML($html); // write the HTML into the PDF
							$pdf->Output($pdfFilePath, 'F');
							$update_data=array(
							'invoice_name'=>$file_name,
							'payment_id'=>isset($post['razorpay_payment_id'])?$post['razorpay_payment_id']:'',
							'payment_order_id'=>isset($post['razorpay_order_id'])?$post['razorpay_order_id']:'',
							'payment_singnature'=>isset($post['razorpay_signature'])?$post['razorpay_signature']:'',
							'payment_status'=>1,
							);
							$this->Home_model->update_payment_details($post['u_id'],$update_data);
							$this->email->set_newline("\r\n");
							$this->email->from('sales@prachatech.com');
							$this->email->to($details['email']);
							$this->email->subject($details['project'].' Inovice');
							$this->email->message('Please find out below attachment');
							$this->email->attach($pdfFilePath);
							$this->email->send();
							//echo $this->db->last_query();exit;
							redirect('payment/complete');
							
				}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('home');
				}
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('home');
			}
		
	}
	public function complete(){
		
		$this->load->view('html/success');
			
	}
	public  function refund(){
		
		$api_id= $this->config->item('keyId');
		$api_Secret= $this->config->item('API_keySecret');	
		$api = new RazorpayApi($api_id, $api_Secret);
		$payment = $api->payment->fetch('pay_9jcdNamZ0Rj5zJ');
		$refund = $payment->refund();
		//$refund = $payment->refund(array('amount' => 100)); 
		echo '<pre>';print_r($refund);exit;
		
	}
	public  function capture(){
		
		$api_id= $this->config->item('keyId');
		$api_Secret= $this->config->item('API_keySecret');	
		$api = new RazorpayApi($api_id, $api_Secret);
		$payment = $api->payment->fetch('pay_9jcdNamZ0Rj5zJ');
		$capture=$payment->capture();
		//$refund = $payment->refund(array('amount' => 100)); 
		//echo '<pre>';print_r($capture);exit;
		
	}
	
	
	
	
	
	
	
	
	
}
