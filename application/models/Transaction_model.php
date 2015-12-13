<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function createTransaction($transaction)
    {
        try
        {
            if (empty($transaction))
            {
                throw new Exception("Empty Transaction data");
            }
            else
            {
                return $this->db->insert("sgp_transactions", $transaction);
            }
        }
        catch (Exeption $e)
        {
            throw new Exception("Transaction Error :: " . $e->getMessage());
        }
    }

    function insertTransaction($transaction)
    {
        try
        {
            if (empty($transaction))
            {
                throw new Exception("Empty Transaction data");
            }
            else
            {
                $this->db->insert("sgp_transactions", $transaction);
                return $this->db->insert_id();
            }
        }
        catch (Exeption $e)
        {
            throw new Exception("Transaction Error :: " . $e->getMessage());
        }
    }

    public function getPastTransactions($v_id, $c_id)
    {
        $this->db->select();
        $this->db->from("sgp_transactions a");
        $this->db->join("sgp_vendors b", "a.tr_ref_id=b.v_id");
        $this->db->where("a.tr_ref_id", $v_id);
        $this->db->where("a.c_id", $c_id);
        $this->db->order_by("a.tr_timestamp", "DESC");
        $result = $this->db->get();
        if ($result->num_rows() > 0)
        {
            return $result->result_array();
        }
        else
            return false;
    }

    function getVendorTransactions($v_id, $where = null)
    {
        try
        {
            if (empty($v_id))
            {
                throw new Exception("Transaction :: empty vendor data");
            }
            else
            {
                $this->db->select();
                $this->db->from("sgp_transactions a");
                $this->db->join("sgp_vendors b", "a.tr_ref_id=b.v_id");
                $this->db->join("sgp_customer c", "a.c_id=c.c_id");
                $this->db->where("tr_ref_id", $v_id);
                if (!empty($where))
                    $this->db->where_in("a.tr_type", $where);
                $this->db->order_by("a.tr_timestamp", "DESC");
                $result = $this->db->get();
                if ($result->num_rows() > 0)
                {
                    return $result->result_array();
                }
                else
                    return false;
            }
        }
        catch (Exeption $e)
        {
            throw new Exception("Transaction Error :: " . $e->getMessage());
        }
    }

    function get_transaction($t_id)
    {
        try
        {
            if (empty($t_id))
            {
                throw new Exception("Transaction :: empty transaction id");
            }
            else
            {
                $this->db->select();
                $this->db->from("sgp_transactions");
                $this->db->where("tr_id", $t_id);
                $result = $this->db->get();
                if ($result->num_rows() > 0)
                {
                    return $result->result_array();
                }
                else
                    return false;
            }
        }
        catch (Exeption $e)
        {
            throw new Exception("Transaction Error :: " . $e->getMessage());
        }
    }

    function get_open_transactions($v_id, $date = null)
    {
        try
        {
            if (empty($v_id))
            {
                throw new Exception("Transaction :: empty vendor data");
            }
            else
            {
                $this->db->select();
                $this->db->from("sgp_transactions a");
                $this->db->join("sgp_vendors b", "a.tr_ref_id=b.v_id");
                $this->db->where("tr_ref_id", $v_id);
                $this->db->where("a.tr_po_status", "0");
                $this->db->where("a.tr_status", "1");
                if (!is_null($date))
                {
                    $this->db->where($date);
                }
                $this->db->order_by("a.tr_timestamp", "DESC");
                $result = $this->db->get();
                if ($result->num_rows() > 0)
                {
                    return $result->result_array();
                }
                else
                    return false;
            }
        }
        catch (Exception $e)
        {
            throw new Exception("Transaction Error :: " . $e->getMessage());
        }
    }

    function perform_settlement($v_id, $starttime, $endtime)
    {
        try
        {
            if (empty($v_id))
            {
                return false;
            }
            else
            {
                $this->db->group_start();
                $this->db->where("v_id", $v_id);
                $this->db->or_where("c_id", $v_id);
                $this->db->group_end();
                $where = array(
                    "tr_status" => '1',
                    "tr_po_status" => '0',
                    "tr_timestamp <= " => $endtime,
                    "tr_timestamp > " => $starttime
                );
                $this->db->where($where);
                $data = array(
                    "tr_po_status" => '1'
                );
                return $this->db->update('sgp_transactions', $data);
            }
        }
        catch (Exception $e)
        {
            throw new Exception("Transaction Error :: " . $e->getMessage());
        }
    }

    function save_transaction($data, $where)
    {
        try
        {
            return $this->db->update('sgp_transactions', $data, $where);
        }
        catch (Exception $e)
        {
            throw new Exception("Transaction Error :: " . $e->getMessage());
        }
    }

}
