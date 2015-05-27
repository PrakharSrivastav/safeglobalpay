<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function createTransaction($transaction){
		try{
			if(empty($transaction)){
				throw new Exception("Empty Transaction data");
			}
			else{
				return $this->db->insert("sgp_transactions",$transaction);
			}
		}
		catch(Exeption $e){
			throw new Exception("Transaction Error :: ".$e->getMessage());
			
		}
	}
	
	function getVendorTransactions($v_id,$where = null){
		try{
			if(empty($v_id)){
				throw new Exception("TRansaction :: empty vendor data");
			}
			else{
				
				$this->db->select();
				$this->db->from("sgp_transactions a");
				$this->db->join("sgp_vendors b", "a.c_id=b.v_id");
				$this->db->where("a.v_id",$v_id);
				
				$this->db->or_where("a.c_id",$v_id);
				if(!empty($where))
					$this->db->where_in("a.tr_type",$where);
				$this->db->order_by("a.tr_timestamp","DESC");
				$result= $this->db->get();
				// print_r($this->db);
				if($result->num_rows()>0){
					return $result->result_array();
				}
				else return false;
			}
		}
		catch(Exeption $e){
			throw new Exception("Transaction Error :: ".$e->getMessage());
			
		}
	}
}
