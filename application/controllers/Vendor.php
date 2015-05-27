<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> library('form_validation');
	}

	public function customer_create_form() {
		if ($this -> session -> userdata("is_logged_in") && ($this -> session -> userdata("v_role") == "1")) {
			$this -> load -> view("safeglobal/vendor/create-customers");
		} else {
			throw new Exception("You are not authorized to view this page");
		}
	}

	public function create_customer() {
		if ($this -> session -> userdata("is_logged_in") && ($this -> session -> userdata("v_role") == "1")) {
			$this -> form_validation -> set_rules("c_name", "Customer Name", "required|min_length[5]");
			$this -> form_validation -> set_rules("c_email", "Customer Email", "required|valid_email");
			$this -> form_validation -> set_rules("c_amount", "Amount", "required|decimal");
			$this -> form_validation -> set_rules("c_service", "Service Type", "required");
			$this -> form_validation -> set_rules("c_contact", "Contact Number", "required|numeric");
			$this -> form_validation -> set_rules("c_alt_contact", "Alternate Contact Number", "numeric");
			$this -> form_validation -> set_rules("c_desc", "Description", "required|min_length[15]");

			if ($this -> form_validation -> run() === false)
				$this -> load -> view("safeglobal/vendor/create-customers");
			else {
				$customer["c_name"] = $this -> input -> post("c_name");
				$customer["c_email"] = $this -> input -> post("c_email");
				$customer["c_amount"] = $this -> input -> post("c_amount");
				$customer["c_service"] = $this -> input -> post("c_service");
				$customer["c_contact"] = $this -> input -> post("c_contact");
				$customer["c_alt_contact"] = $this -> input -> post("c_alt_contact");
				$customer["c_description"] = $this -> input -> post("c_desc");
				$customer["v_id"] = $this->session->userdata("v_id");
				
				$this -> load -> model("customer_model", "customer");
				if ($this -> customer -> add_customer($customer)) {
					redirect(base_url() . "admin");
				}
			}
		} else {
			throw new Exception("You are not authorized to view this page");
		}
	}
	
	public function customer_manage_form(){
		if ($this -> session -> userdata("is_logged_in") && ($this -> session -> userdata("v_role") == "1")) {
			$this->load->model('Customer_model','customer');
			$result = $this->customer->get_customers();
			if($result){
				$this->load->view("safeglobal/vendor/manage-customers",array("result"=>$result));
			}
		} else {
			throw new Exception("You are not authorized to view this page");
		}
	}
	
	public function view_customer_details(){
		if ($this -> session -> userdata("is_logged_in") && ($this -> session -> userdata("v_role") == "1")) {
			$c_id = $this->uri->segment(3);	
				
			$this->load->model('Customer_model','customer');
			$result = $this->customer->get_customer($c_id );
			if($result){
				$this->load->view("safeglobal/vendor/view-customer-details",array("result"=>$result[0]));
			}
		} else {
			throw new Exception("You are not authorized to view this page");
		}
	}
	
	public function delete_customer_details(){
		if ($this -> session -> userdata("is_logged_in") && ($this -> session -> userdata("v_role") == "1")) {
			$c_id = $this->uri->segment(3);	
			$this->load->model('Customer_model','customer');
			if($this->customer->delete_customer($c_id )){
				redirect(base_url() . "vendor/customer_manage_form");
			}
		} else {
			throw new Exception("You are not authorized to view this page");
		}
	}
	
	public function edit_customer_details($c_id){
		if ($this -> session -> userdata("is_logged_in") && ($this -> session -> userdata("v_role") == "1")) {
			// $c_id = $this->uri->segment(3);	
			$this->load->model('Customer_model','customer');
			$result = $this->customer->get_customer($c_id );
			if($result){
				$this->load->view("safeglobal/vendor/edit-customer-details",array("result"=>$result[0]));
			}
		} else {
			throw new Exception("You are not authorized to view this page");
		}
	}
	
	public function update_customer_detail(){
		if ($this -> session -> userdata("is_logged_in") && ($this -> session -> userdata("v_role") == "1")) {
			$this->form_validation->set_rules("c_name","Customer","required|min_length[8]");
			$this->form_validation->set_rules("c_email","Email","required|valid_email");
			$this->form_validation->set_rules("c_contact","Contact","required|numeric");
			$this->form_validation->set_rules("c_alt_contact","Alternate Contact","numeric");
			$this->form_validation->set_rules("c_amount","Amount","required|decimal");
			$this->form_validation->set_rules("c_service","Service","required");
			$this->form_validation->set_rules("c_description","Description","required|min_length[15]");
			$c_id = $this->uri->segment(3);	
			if($this->form_validation->run() === false){
				$this->edit_customer_details($c_id);
			}
			else {
				$customer['c_name'] = trim($this->input->post("c_name"));
				$customer['c_email'] = trim($this->input->post("c_email"));
				$customer['c_contact'] = trim($this->input->post("c_contact"));
				$customer['c_alt_contact'] = trim($this->input->post("c_alt_contact"));
				$customer['c_amount'] = trim($this->input->post("c_amount"));
				$customer['c_service'] = trim($this->input->post("c_service"));
				$customer['c_description'] = trim($this->input->post("c_description"));
				$where['c_id']=$c_id;
				$where['v_id']=$this->session->userdata("v_id");
				$this->load->model("Customer_model","customer");
				if($this->customer->update_customer($customer, $where)){
					$this->edit_customer_details($c_id);
				}
			}
		} else {
			throw new Exception("You are not authorized to view this page");
		}
	}
}
