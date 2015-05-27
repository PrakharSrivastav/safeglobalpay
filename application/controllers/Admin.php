<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	public function index(){
		if($this->session->userdata("is_logged_in")){
			if($this->session->userdata("v_role") == "0"){
				$this->load->model("vendor_model","vendor");
				$result = $this->vendor->get_vendors();
				$this->load->view("safeglobal/admin/admin-login-dashboard",array("result"=>$result));
			}
			else if ($this->session->userdata("v_role") == "1"){
				$this -> load -> model("customer_model", "customer");
				$result = $this->customer->get_customers();
				$this->load->view("safeglobal/vendor/vendor-login-dashboard",array("result"=>$result));
			}
		}
		else
			$this->load->view("safeglobal/admin/admin-login");
	}
	
	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("sgp_username","Username","required|min_length[5]");
		$this->form_validation->set_rules("sgp_password","Password","required|min_length[5]");
		if($this->form_validation->run()===FALSE){
			$this->load->view("safeglobal/admin/admin-login");
		}
		else{
			$username = trim($this->input->post("sgp_username"));
			$password = trim($this->input->post("sgp_password"));
			$this->load->model("Vendor_model","vendor");
			$data["v_name"]=$username;
			$data["v_pass"]=$password;
			if($this->vendor->validate_password($data)){
				if($this->session->userdata("v_role") == "0"){
					$this->load->model("vendor_model","vendor");
					$result = $this->vendor->get_vendors();
					$this->load->view("safeglobal/admin/admin-login-dashboard",array("result"=>$result));
				}
				else if($this->session->userdata("v_role") == "1"){
					$this -> load -> model("customer_model", "customer");
					$result = $this->customer->get_customers();
					$this->load->view("safeglobal/vendor/vendor-login-dashboard",array("result"=>$result));
				}
					
			}
			else{
				$this->load->view("safeglobal/admin/admin-login",array("error"=>"Username or Password do not match<br />"));
			}
		}
	}
	
	public function logout(){
		if($this->session->userdata("is_logged_in")){
			$this->session->sess_destroy();
			$this->load->view("safeglobal/admin/admin-login");
		}
		else{
			throw new Exception("You are not authorized to view this page");
		}
	}
	
	public function vendor_create_form(){
		if($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")){
			$this->load->view("safeglobal/admin/create-vendors");
		}
		else{
			throw new Exception("You are not authorized to view this page");
		}
	}
	
	public function create_vendor(){
		if($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")){
			$this->form_validation->set_rules("v_name","Vendor Name","required|min_length[5]|is_unique[sgp_vendors.v_name]");
			$this->form_validation->set_rules("v_email","Vendor Email","required|valid_email|is_unique[sgp_vendors.v_email]");
			$this->form_validation->set_rules("v_pass","Password","required|min_length[8]");
			$this->form_validation->set_rules("c_pass","Confirm Password","required|matches[v_pass]");
			$this->form_validation->set_rules("v_cont","Contact Number","required|numeric");
			$this->form_validation->set_rules("v_alt_cont","Alternate Contact Number","numeric");
			$this->form_validation->set_rules("v_percent","Percentage Commission","required|decimal");
			$this->form_validation->set_rules("v_reser","Rolling Reserve","required|decimal");
			$this->form_validation->set_rules("v_time","Rolling Reserve Duration","required|integer");
			$this->form_validation->set_rules("v_refund","Refund Deductions","required|decimal");
			$this->form_validation->set_rules("v_chargeback","Chargeback Deductions","required|decimal");
			$this->form_validation->set_rules("v_payment_term","Payment Period to Vendor","required|integer");
			$this->form_validation->set_rules("v_init_reserve","Initial Security Reserve","required|decimal");
			$this->form_validation->set_rules("v_account_name","Vendor's Account Name","required");
			$this->form_validation->set_rules("v_account_num","Vendor's Account Number","required");
			$this->form_validation->set_rules("v_bank_name","Vendor's Bank Name","required");
			
			if($this->form_validation->run() === false)
				$this->load->view("safeglobal/admin/create-vendors");
			else {
				$vendor["v_name"]				=	$this->input->post("v_name");
				$vendor["v_email"]				=	$this->input->post("v_email");
				$vendor["v_password"]			=	$this->input->post("v_pass");
				$vendor["v_address"]			=	$this->input->post("v_addr");
				$vendor["v_contact"]			=	$this->input->post("v_cont");
				$vendor["v_alt_contact"]		=	$this->input->post("v_alt_cont");
				$vendor["v_role"]				=	"1";
				$vendor["v_status"]				=	"0";
				$vendor["v_initial_reserve"]	=	$this->input->post("v_init_reserve");
				$vendor["v_payment_term"]		=	$this->input->post("v_payment_term");
				$vendor["v_payment_date"]		=	$this->input->post("v_payment_date");
				$vendor["v_chargeback_penalty"]	=	$this->input->post("v_chargeback");
				$vendor["v_refund_penalty"]		=	$this->input->post("v_refund");
				$vendor["v_rolling_res_duration"]=	$this->input->post("v_time");
				$vendor["v_rolling_res"]		=	$this->input->post("v_reser");
				$vendor["v_percent"]			=	$this->input->post("v_percent");
				$vendor["v_account_name"]		=	$this->input->post("v_account_name");
				$vendor["v_account_num"]		=	$this->input->post("v_account_num");
				$vendor["v_bank_name"]			=	$this->input->post("v_bank_name");
				$vendor["v_bank_code"]			=	$this->input->post("v_bank_code");
				$vendor["v_bank_details"]		=	$this->input->post("v_bank_details");
				
				$this->load->model("vendor_model","vendor");
				if($this->vendor->add_vendor($vendor)){
					redirect(base_url()."admin");
				}
			}
		}
		else{
			throw new Exception("You are not authorized to view this page");
		}
	}
	
	public function vendor_manage_form(){
		if($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")){
			$this->load->model("vendor_model","vendor");
			$result = $this->vendor->get_vendors();
			$this->load->view("safeglobal/admin/admin-manage-vendors",array("result"=>$result));
		}
		else
			throw new Exception("You are not authorized to view this page");
	}
	
	public function view_vendor_details(){
		if($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")){
			$v_id = $this->uri->segment(3);
			// print_r($v_id);
			$this->load->model("vendor_model","vendor");
			$result = $this->vendor->get_vendor($v_id);
			// print_r($result);
			$this->load->view("safeglobal/admin/view-vendor-details",array("result"=>$result[0]));
		}
		else
			throw new Exception("You are not authorized to view this page");
	}
	
	public function toggle_vendor_status(){
		if($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")){
			$v_id = $this->uri->segment(3);
			$this->load->model("vendor_model","vendor");
			$result = $this->vendor->get_vendor($v_id);
			// print_r($result[0]);
			// $this->load->view("safeglobal/admin/admin-manage-vendors",array("result"=>$result));
			if($result){
				$update = array("v_status"=>"0");
				$where = array("v_id"=>$v_id,"v_role"=>"1","v_email"=>$result[0]['v_email']);
				
				if($this->vendor->update_vendor($update,$where)){
					$this->vendor_manage_form();
				}
			}
		}
		else
			throw new Exception("You are not authorized to view this page");
	}
	
	public function edit_vendor_details($v_id){
		if ($this -> session -> userdata("is_logged_in") && ($this -> session -> userdata("v_role") == "0")) {
			// $c_id = $this->uri->segment(3);	
			$this->load->model('Vendor_model','vendor');
			$result = $this->vendor->get_vendor($v_id);
			if($result){
				$this->load->view("safeglobal/admin/edit-vendor-details",array("result"=>$result[0]));
			}
		} else {
			throw new Exception("You are not authorized to view this page");
		}
	}
	
	public function update_vendor_detail(){
		if ($this -> session -> userdata("is_logged_in") && ($this -> session -> userdata("v_role") == "0")) {
			$this->form_validation->set_rules("v_name","Vendor Name","required|min_length[5]");
			$this->form_validation->set_rules("v_email","Vendor Email","required|valid_email");
			$this->form_validation->set_rules("v_address","Address","required|min_length[8]");
			$this->form_validation->set_rules("v_percent","Percentage Commission","required|decimal");
			$this->form_validation->set_rules("v_rolling_res","Rolling Reserve","required|decimal");
			$this->form_validation->set_rules("v_rolling_res_duration","Rolling Reserve Duration","numeric");
			$this->form_validation->set_rules("v_refund_penalty","Refund Deductions","required|decimal");
			$this->form_validation->set_rules("v_chargeback_penalty","Chargeback Deductions","required|decimal");
			$this->form_validation->set_rules("v_payment_term","Payment Period to Vendor","required|numeric");
			$this->form_validation->set_rules("v_initial_reserve","Initial Security Reserve","required|decimal");
			$this->form_validation->set_rules("v_contact","Vendor Contact","required|numeric");
			$this->form_validation->set_rules("v_alt_contact","Vendor Alternate Contact","required|numeric");
			
			$v_id = $this->uri->segment(3);	
			if(strlen(trim($v_id)) < 1){
				throw new Exception("Empty vendor id provided for updating the data");
			}
			else{
				if($this->form_validation->run() === false){
					$this->edit_vendor_details($v_id);
				}
				else {
					$vendor['v_name'] 					= trim($this->input->post("v_name"));
					$vendor['v_email'] 					= trim($this->input->post("v_email"));
					$vendor['v_address'] 				= trim($this->input->post("v_address"));
					$vendor['v_percent'] 				= trim($this->input->post("v_percent"));
					$vendor['v_rolling_res'] 			= trim($this->input->post("v_rolling_res"));
					$vendor['v_rolling_res_duration'] 	= trim($this->input->post("v_rolling_res_duration"));
					$vendor['v_refund_penalty'] 		= trim($this->input->post("v_refund_penalty"));
					$vendor['v_chargeback_penalty'] 	= trim($this->input->post("v_chargeback_penalty"));
					$vendor['v_payment_term'] 			= trim($this->input->post("v_payment_term"));
					$vendor['v_initial_reserve']		= trim($this->input->post("v_initial_reserve"));
					$vendor['v_contact'] 				= trim($this->input->post("v_contact"));
					$vendor['v_alt_contact'] 			= trim($this->input->post("v_alt_contact"));
					$where = array("v_id"=>$v_id,"v_role"=>"1","v_email"=>$vendor['v_email']);
					$this->load->model("vendor_model","vendor");
					if($this->vendor->update_vendor($vendor,$where)){
						$this->view_vendor_details($v_id);
					}
				}
			}
		} else {
			throw new Exception("You are not authorized to view this page");
		}
	}
	
	public function email_vendor(){
		try{
			if($this -> session -> userdata("is_logged_in") && ($this -> session -> userdata("v_role") == "0")){
				$this->load->model("Vendor_model","vendor");
				$v_id = $this->uri->segment(3);
				$vendor = $this->vendor->get_vendor($v_id);
				// print_r($vendor);	
				
				$this->load->library('email');
	            $this->email->clear();
	            $config['protocol'] = 'smtp';
	            $config['mailtype'] = 'html';
	            $config['smtp_host'] = 'smtp.gmail.com';
	            // $config['smtp_crypto'] = 'ssl';
	            $config['smtp_user'] = 'srivprakhar@gmail.com';
	            $config['smtp_pass'] = 'Hafslund12';
	            $config['smtp_port'] = '25';
	            $config['charset'] = 'utf-8';
	            $config['wordwrap'] = false;
	            $this->email->initialize($config);
	            $this->email->subject("random test message");
	            $this->email->message('test message');
	            $this->email->to('srivprakhar@gmail.com');
	            $this->email->from('test@safeglobalpay.com', 'test account');
	            $this->email->reply_to('test@safeglobalpay.com');
	           	
	           	$this->email->send();
							
			}
						
			else{
				throw new Exception("You are not authorized to view this page.");
					
			}
		}
		catch(Exception $e){
			throw new Exception($e->getMessage());
			
		}
	}

	public function payout_vendor(){
		$v_id = $this->uri->segment(3);
		$this->load->view("safeglobal/admin/vendor-payout-details",array("v_id"=>$v_id));
	}
	
	public function process_vendor_payout(){
		$v_id = $this->uri->segment(3);
		
		$this->form_validation->set_rules("transaction_amount","Payout Amount","required|decimal");
		$this->form_validation->set_rules("transaction_description", "Transaction Description","required|min_length[10]");
		
		if($this->form_validation->run() ===false){
			$this->load->view("safeglobal/admin/vendor-payout-details",array("v_id"=>$v_id));
		}
		else{
			$amount = floatval($this->input->post("transaction_amount"));
			$description = $this->input->post("transaction_description");
			
			$transaction['v_id'] = $this->session->userdata("v_id");
			$transaction['c_id'] = $v_id;
			$transaction['tr_type'] = '3'; // 3 == payout
			$transaction['tr_ref_id'] = 0;
			$transaction['tr_amount'] = $amount;
			$transaction['tr_description'] = $description;
			$transaction['tr_timestamp'] = strtotime(date("Y-m-d H:i:s"));
			$this->load->model("Transaction_model","trans");
			if($this->trans->createTransaction($transaction))	{
				$this->vendor_manage_form();
			}
		}
	}

	public function get_vendor_transactions(){
		$v_id = $this->uri->segment(3);
		$this->load->model("Transaction_model","trans");
		$result = $this->trans->getVendorTransactions($v_id);
		// print_r($v_id);
		$this->load->view("safeglobal/admin/vendor-transaction-details",array("result"=>$result));
	}
	
	public function vendor_refund_chargeback(){
		$v_id = $this->uri->segment(3);
		$where =  array("1","2") ;
		$this->load->model("Transaction_model","trans");
		$result = $this->trans->getVendorTransactions($v_id,$where);
		// print_r($v_id);
		$this->load->view("safeglobal/admin/vendor-transaction-details",array("result"=>$result));
	}
}
