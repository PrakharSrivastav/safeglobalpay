<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function validate_password($data) {
		try {
			if (empty($data))
				throw new Exception("Validation Error :: Empty data");
			else {
				// print_r($data);
				$where = array("v_name" => $data['v_name'], "v_status" => '1');
				$this -> db -> select();
				$this -> db -> where($where);
				$result = $this -> db -> get("sgp_vendors");
				if ($result -> num_rows() > 0) {
					$result = $result -> result_array();
					// print_r($result);
					$password = $result[0]['v_password'];
					if (password_verify($data['v_pass'], $password)) {
						$this -> session -> set_userdata(array_merge($result[0], array("is_logged_in" => true)));
						return true;
					} else {
						return false;
					}
				} else {
					return false;
				}
			}
		} catch (Exception $e) {
			throw new Exception($e -> getMessage());
		}
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

	public function add_vendor($data) {
		try {
			if (empty($data)) {
				throw new Exception("Invalid array for inserting vendors");
			} else {
				return $this -> db -> insert("sgp_vendors", $data);
			}
		} catch(Exception $e) {
			throw new Exception($e -> getMessage());

		}
	}

	public function get_vendors() {
		try {
			$this -> db -> select();
			$this -> db -> where(array("v_role" => "1"));
			$result = $this -> db -> get("sgp_vendors");
			if ($result -> num_rows() < 1)
				return false;
			else {
				return $result -> result_array();
			}
		} catch(Exception $e) {
			throw new Exception($e -> getMessage());

		}

	}
	public function get_vendor($v_id){
		 try{
			 if(empty($v_id)){
			 	throw new Exception("Empty Vendor Id");
			 }
			 else{
			 	$where = array(
					"v_role"	=> "1",
					"v_id"		=> $v_id,
				);
				$this->db->select();
				$this->db->where($where);
				$result = $this -> db -> get("sgp_vendors");
				if ($result -> num_rows() < 1)
					return false;
				else {
					// print_r($result);
					return $result -> result_array();
				}
			 }
		 }
		 catch(Exception $e){
		 	throw new Exception($e->getMessage());
		 }
	 }
	public function update_vendor($vendor,$where){
		try {
			if(empty($vendor) || empty($where)){
				throw new Exception("Invalid data sent for updating the customer");
			}
			else{
				$this->db->where($where);
				return $this->db->update('sgp_vendors', $vendor);
			}
		} catch(Exception $e) {
			throw new Exception($e -> getMessage());
		}
	}
}
