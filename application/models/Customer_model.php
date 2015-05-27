<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

/*public function add_vendor($data){
	 try{
	 if(empty($data)){
	 throw new Exception("Invalid array for inserting vendors");
	 }
	 else{

	 }
	 }
	 catch(Exception $e){
	 throw new Exception($e->getMessage());

	 }
	 }*/

	public function add_customer($data) {
		try {
			if (empty($data)) {
				throw new Exception("Invalid array for inserting customer");
			} else {
				return $this -> db -> insert("sgp_customer", $data);
			}
		} catch(Exception $e) {
			throw new Exception($e -> getMessage());

		}
	}

	public function get_customers() {
		try {
			$this -> db -> select();
			$this -> db -> where(array("v_id" => $this->session->userdata("v_id")));
			$result = $this -> db -> get("sgp_customer");
			if ($result -> num_rows() < 1)
				return false;
			else {
				return $result -> result_array();
			}
		} catch(Exception $e) {
			throw new Exception($e -> getMessage());
		}
	}
	
	public function get_customer($c_id) {
		try {
			$this -> db -> select();
			$this -> db -> where(array("v_id" => $this->session->userdata("v_id"),"c_id"=>$c_id));
			$result = $this -> db -> get("sgp_customer");
			if ($result -> num_rows() < 1)
				return false;
			else {
				return $result -> result_array();
			}
		} catch(Exception $e) {
			throw new Exception($e -> getMessage());
		}
	}
	
	public function delete_customer($c_id) {
		try {
			if(empty($c_id)){
				throw new Exception("Invalid data sent for deleting the customer");
			}
			else{
				$this->db->where("c_id",$c_id);
				return $this->db->delete("sgp_customer");
			}
		} catch(Exception $e) {
			throw new Exception($e -> getMessage());
		}
	}
	
	public function update_customer($customer,$where){
		try {
			if(empty($customer) || empty($where)){
				throw new Exception("Invalid data sent for updating the customer");
			}
			else{
				$this->db->where($where);
				return $this->db->update('sgp_customer', $customer);
			}
		} catch(Exception $e) {
			throw new Exception($e -> getMessage());
		}
	}
}
