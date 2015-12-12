<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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
                $where = array("v_name" => $data['v_name']);
                $this->db->select();
                $this->db->where($where);
                $result = $this->db->get("sgp_vendors");
                if ($result->num_rows() > 0) {
                    $result = $result->result_array();
                    // print_r($result);
                    $password = $result[0]['v_password'];
                    if (password_verify($data['v_pass'], $password)) {
                        $this->session->set_userdata(array_merge($result[0], array("is_logged_in" => true)));
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /* public function add_vendor($data){
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
      } */

    public function add_vendor($data) {
        try {
            if (empty($data)) {
                throw new Exception("Invalid array for inserting vendors");
            } else {
                return $this->db->insert("sgp_vendors", $data);
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function get_vendors() {
        try {
            $this->db->select();
            $this->db->where(array("v_role" => "1"));
            $result = $this->db->get("sgp_vendors");
            if ($result->num_rows() < 1)
                return false;
            else {
                return $result->result_array();
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function get_vendor($v_id) {
        try {
            if (empty($v_id)) {
                throw new Exception("Empty Vendor Id");
            } else {
                $where = array(
                    "v_role" => "1",
                    "v_id" => $v_id,
                );
                $this->db->select();
                $this->db->where($where);
                $result = $this->db->get("sgp_vendors");
                if ($result->num_rows() < 1)
                    return false;
                else {
                    // print_r($result);
                    return $result->result_array();
                }
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function update_vendor($vendor, $where) {
        try {
            if (empty($vendor) || empty($where)) {
                throw new Exception("Invalid data sent for updating the customer");
            } else {
                $this->db->where($where);
                $result = $this->db->update('sgp_vendors', $vendor);
                //print_r($this->db);
                return $result;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function check_email($email) {
        try {
            if (empty($email)) {
                return false;
            } else {
                $result = $this->db->get_where("sgp_vendors", array("v_email" => $email));
                //print_r($this->db);
                if ($result->num_rows() === 1)
                    return true; //$result -> result_array();
                else
                    return false;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function get_specific_vendor($where) {
        try {
            if (empty($where)) {
                return false;
            } else {
                $result = $this->db->get_where("sgp_vendors", $where);
                if ($result->num_rows() === 1)
                    return $result->result_array();
                else
                    return false;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function get_rr_value($where) {
        try {
            if (empty($where)) {
                return false;
            } else {
                $this->db->where($where);
                $result = $this->db->get("sgp_rr_calculation");
                if ($result->num_rows() < 1)
                    return 0;
                else {
                    // print_r($result);
                    $ret_val = $result->result_array();
                    return $ret_val[0];
                }
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function set_rr_value($data) {
        try {
            if (empty($data)) {
                throw new Exception("No data provided to set rolling reserve data");
            } else {
                return $this->db->insert("sgp_rr_calculation", $data);
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function update_last_rr_record($data) {
        try {
            if (empty($data)) {
                throw new Exception("No data provided for updating the vendor rolling reserve");
            } else {
                $where = array(
                    "id" => $data,
                    "rr_status" => '0'
                );
                $this->db->where($where);
                $update = array(
                    "rr_status" => '1'
                );
                return $this->db->update('sgp_rr_calculation', $update);
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

}
