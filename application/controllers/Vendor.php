<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    private function sanitize($dirtyString) {
        return trim(htmlspecialchars($dirtyString, ENT_QUOTES));
    }

    public function customer_create_form() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $this->load->view("ayjoconsulting/vendor/create-customers");
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function create_customer() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $this->form_validation->set_rules("c_name", "Customer Name", "required|min_length[5]|is_unique[sgp_customer.c_name]");
                $this->form_validation->set_rules("c_email", "Customer Email", "required|valid_email|is_unique[sgp_customer.c_email]");
                $this->form_validation->set_rules("c_amount", "Amount", "required|decimal");
//                $this->form_validation->set_rules("c_service", "Service Type", "required");
                $this->form_validation->set_rules("c_contact", "Contact Number", "required|numeric");
                $this->form_validation->set_rules("c_alt_contact", "Alternate Contact Number", "numeric");
//                $this->form_validation->set_rules("c_desc", "Description", "required|min_length[15]");

                if ($this->form_validation->run() === false)
                    $this->load->view("ayjoconsulting/vendor/create-customers");
                else {
                    $customer["c_name"] = $this->sanitize($this->input->post("c_name"));
                    $customer["c_email"] = $this->sanitize($this->input->post("c_email"));
                    $customer["c_amount"] = $this->sanitize($this->input->post("c_amount"));
                    $customer["c_service"] = $this->sanitize($this->input->post("c_service"));
                    $customer["c_contact"] = $this->sanitize($this->input->post("c_contact"));
                    $customer["c_alt_contact"] = $this->sanitize($this->input->post("c_alt_contact"));
                    $customer["c_description"] = $this->sanitize($this->input->post("c_desc"));
                    $customer["v_id"] = $this->session->userdata("v_id");

                    $this->load->model("customer_model", "customer");
                    if ($this->customer->add_customer($customer)) {
                        redirect(site_url() . "/admin");
                    }
                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function customer_manage_form($message = null, $link = null) {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $this->load->model('Customer_model', 'customer');
                $result = $this->customer->get_customers();
//                if ($result) {
                $this->load->view("ayjoconsulting/vendor/manage-customers", array("result" => $result, "message" => $message, "link" => $link));
//                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function view_customer_details() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $c_id = $this->uri->segment(3);

                $this->load->model('Customer_model', 'customer');
                $result = $this->customer->get_customer($c_id);
                if ($result) {
                    $this->load->view("ayjoconsulting/vendor/view-customer-details", array("result" => $result[0]));
                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function delete_customer_details() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $c_id = $this->uri->segment(3);
                $this->load->model('Customer_model', 'customer');
                if ($this->customer->delete_customer($c_id)) {
                    redirect(site_url() . "/vendor/customer_manage_form");
                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function edit_customer_details($c_id) {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                // $c_id = $this->uri->segment(3);	
                $this->load->model('Customer_model', 'customer');
                $result = $this->customer->get_customer($c_id);
                if ($result) {
                    $this->load->view("ayjoconsulting/vendor/edit-customer-details", array("result" => $result[0]));
                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function update_customer_detail() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $this->form_validation->set_rules("c_name", "Customer Name", "required|min_length[8]");
                $this->form_validation->set_rules("c_email", "Customer Email", "required|valid_email");
                $this->form_validation->set_rules("c_contact", "Contact Number", "required|numeric");
                $this->form_validation->set_rules("c_alt_contact", "Alternate Contact Number", "numeric");
                //$this->form_validation->set_rules("c_amount", "Amount", "required|decimal");
                $this->form_validation->set_rules("c_service", "Service", "required");
                $this->form_validation->set_rules("c_description", "Description", "required|min_length[15]");
                $c_id = $this->uri->segment(3);
                //var_dump($this->form_validation->run());
                if ($this->form_validation->run() === false) {
                    $this->edit_customer_details($c_id);
                } else {
                    $customer['c_name'] = $this->sanitize($this->input->post("c_name"));
                    $customer['c_email'] = $this->sanitize($this->input->post("c_email"));
                    $customer['c_contact'] = $this->sanitize($this->input->post("c_contact"));
                    $customer['c_alt_contact'] = $this->sanitize($this->input->post("c_alt_contact"));
                    $customer['c_amount'] = 0;
                    $customer['c_service'] = $this->sanitize($this->input->post("c_service"));
                    $customer['c_description'] = $this->sanitize($this->input->post("c_description"));
                    $where['c_id'] = $c_id;
                    $where['v_id'] = $this->session->userdata("v_id");
                    $this->load->model("Customer_model", "customer");
                    if ($this->customer->update_customer($customer, $where)) {
                        $this->view_customer_details();
                    }
                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function process_user_agreement() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $agreement_status = $this->input->post("agree");
                // print_r($agreement_status);
                if ($agreement_status == "" || is_null($agreement_status) || strlen($agreement_status) < 1) {
                    throw new Exception("User agreement status is not defined. Please login and try again.");
                } else {
                    if ($agreement_status === '1') {
                        redirect("admin/logout");
                    } else {
                        $this->load->model("Vendor_model", "vendor");
                        $where = array(
                            "v_id" => $this->session->userdata("v_id"),
                            "v_email" => $this->session->userdata("v_email"),
                            "v_agreed" => '0',
                        );
                        $update = array("v_agreed" => '1');

                        if ($this->vendor->update_vendor($update, $where)) {
                            redirect(site_url() . "/admin");
                        } else {
                            throw new Exception("Vendor agreement terms could not be updated in the database. Please try to login again");
                        }
                    }
                }
            } else
                throw new Exception("You are not authorized to view this page Or your session has expired.");
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function send_new_invoice() {

        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $c_id = $this->uri->segment(3);
                if (empty($c_id)) {
                    throw new Exception("Customer Id not provided");
                } else {
                    $this->load->model('Customer_model', 'customer');
                    $result = $this->customer->get_customer($c_id);
                    $this->load->view("ayjoconsulting/vendor/new-invoice", array("result" => $result));
                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function send_invoice() {

        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $this->form_validation->set_rules("c_id", "Customer id", "required");
                $this->form_validation->set_rules("c_amount", "Amount", "required|decimal");
                if ($this->form_validation->run() === false) {
                    $this->load->model('Customer_model', 'customer');
                    $result = $this->customer->get_customer($this->input->post('c_id'));
                    $this->load->view("ayjoconsulting/vendor/new-invoice", array("result" => $result));
                } else {
                    $c_service = ""; //$this->input->post("c_service");
                    $c_email = $this->sanitize($this->input->post("c_email"));
                    $c_name = $this->sanitize($this->input->post("c_name"));
                    $v_name = $this->sanitize($this->session->userdata("v_name"));
                    $v_email = $this->session->userdata("v_email");
                    $desc = $this->sanitize($this->input->post("c_desc"));
                    $amount = floatval($this->input->post("c_amount"));
                    $v_id = $this->sanitize($this->session->userdata("v_id"));
                    $c_id = $this->sanitize($this->input->post("c_id"));
                    $transaction['v_id'] = $v_id;
                    $transaction['c_id'] = $c_id;
                    $transaction['tr_type'] = '0'; // 0 == payment
                    $transaction['tr_ref_id'] = $v_id;
                    $transaction['tr_amount'] = $amount;
                    $transaction['tr_description'] = $desc;
                    $transaction['tr_timestamp'] = strtotime(date("Y-m-d H:i:s"));

                    $this->load->model("Transaction_model", "trans");
                    $id = $this->trans->insertTransaction($transaction);

                    if (!empty($id)) {
                        $href = site_url() . "/transactions/processPayment/" . $v_id . "/" . $c_id . "/" . $id . "/" . round($amount, 2);
                        $message = file_get_contents("resources/invoice_details.html");

                        if ($message) {
                            $message = str_replace("#customer_name#", $c_name, $message);
                            $message = str_replace("#amount#", $amount, $message);
                            $message = str_replace("#customer_email#", $c_email, $message);
                            $message = str_replace("#invoice_number#", $id, $message);
                            $message = str_replace("#payment_url#", $href, $message);
                        } else {
                            $message = "<div>Hello  $c_name , <br /><br />You have received a new invoice  with the following details : <br />" .
                                    "<ul><li><strong>Service Name : </strong>$c_service</li>" .
                                    "<li><strong>Service Description : </strong>$desc</li>" .
                                    "<li><strong>Service Amount :</strong> $amount</li></ul>" .
                                    "Please click on the link below to process the payment.<br /><br /><a href='" . $href .
                                    "'><button style='border-radius:3px;padding:5px;background:blue;color:black;border:none;'>" .
                                    "Click to Pay</button></a><br /><br />You can also copy and paste the below link on your browser to go to the payment page.<br/>" . $href .
                                    "Thanks,<br />AyjoConsulting Admin</div>";
                        }

                        $this->load->library('email');
                        $this->email->clear();

                        $config['protocol'] = 'mail';
                        $config['mailtype'] = 'html';
                        $config['smtp_host'] = 'sg2plcpnl0003.prod.sin2.secureserver.net';
                        $config['smtp_crypto'] = 'ssl';
                        $config['smtp_user'] = 'admin@ayjoconsulting.com';
                        $config['smtp_pass'] = 's45eg106414dm1n';
                        $config['smtp_port'] = 465;
                        $config['charset'] = 'utf-8';
                        $config['wordwrap'] = false;

                        $this->email->initialize($config);
                        $this->email->subject("New Invoice received : - " . $id);
                        $this->email->message(trim($message));
                        $this->email->to($c_email);
                        $this->email->bcc(array($v_email,'ay.khaitan@gmail.com', 'srivprakhar@gmail.com', 'admin@ayjoconsulting.com'));
                        $this->email->from('admin@ayjoconsulting.com', "AyjoConsulting Admin");
//                        $this->email->reply_to($v_email, $v_name);

                        if ($this->email->send()) {
                            $email_status = "An invoice has been sent successfully to $c_email.";
                            redirect(site_url() . "/vendor/customer_manage_form");
                        } else {
                            $email_status = "There was an error sending an email to $c_email. You can copy the URL below and send it to customer for making payments";
                            $this->customer_manage_form($email_status, $href);
                        }
                    }
                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function get_all_reports() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $cid = $this->uri->segment(3);
                $v_id = $this->session->userdata("v_id");
                $this->load->model("transaction_model", "tr");
                $report = $this->tr->getPastTransactions($v_id, $cid);
                $this->load->view("ayjoconsulting/vendor/vendor-transaction-details", array("result" => $report, "type" => "all"));
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function process_download() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "1")) {
                $v_id = $this->uri->segment(3);
                $type = $this->uri->segment(4);
                $sql = "";
                if ($type === "all")
                    $sql = "SELECT                  b.v_id as vendor_id, 
			b.v_name as name,
			b.v_email as email,
			a.tr_id as transaction_id,
			a.tr_amount as amount,
			a.tr_description as description,
			a.tr_type as transaction_type,
			from_unixtime(a.tr_timestamp) as timestamp,
			b.v_bank_name as bank_name,
			b.v_account_num as vendor_account_number
			FROM `sgp_transactions` `a` JOIN `sgp_vendors` `b` ON `a`.`c_id`=`b`.`v_id` 
			WHERE (`a`.`v_id` = '" . $v_id . "' OR `a`.`c_id` = '" . $v_id . "') 
			ORDER BY `a`.`tr_timestamp` DESC LIMIT 1000";
                else if ($type === "2")
                    $sql = "SELECT                  b.v_id as vendor_id, 
			b.v_name as name,
			b.v_email as email,
			a.tr_id as transaction_id,
			a.tr_amount as amount,
			a.tr_description as description,
			a.tr_type as transaction_type,
			from_unixtime(a.tr_timestamp) as timestamp,
			b.v_bank_name as bank_name,
			b.v_account_num as vendor_account_number
			 FROM `sgp_transactions` `a` JOIN `sgp_vendors` `b` ON `a`.`c_id`=`b`.`v_id` WHERE (`a`.`v_id` = '" . $v_id . "' OR `a`.`c_id` = '" . $v_id . "') AND `a`.`tr_type` IN('0') ORDER BY `a`.`tr_timestamp` DESC LIMIT 1000";
                else if ($type === "1")
                    $sql = "SELECT                  b.v_id as vendor_id, 
			b.v_name as name,
			b.v_email as email,
			a.tr_id as transaction_id,
			a.tr_amount as amount,
			a.tr_description as description,
			a.tr_type as transaction_type,
			from_unixtime(a.tr_timestamp) as timestamp,
			b.v_bank_name as bank_name,
			b.v_account_num as vendor_account_number
			 FROM `sgp_transactions` `a` JOIN `sgp_vendors` `b` ON `a`.`c_id`=`b`.`v_id` WHERE (`a`.`v_id` = '" . $v_id . "' OR `a`.`c_id` = '" . $v_id . "') AND `a`.`tr_type` IN('3') ORDER BY `a`.`tr_timestamp` DESC LIMIT 1000";
                else if ($type === "0")
                    $sql = "SELECT                   b.v_id as vendor_id, 
			b.v_name as name,
			b.v_email as email,
			a.tr_id as transaction_id,
			a.tr_amount as amount,
			a.tr_description as description,
			a.tr_type as transaction_type,
			from_unixtime(a.tr_timestamp) as timestamp,
			b.v_bank_name as bank_name,
			b.v_account_num as vendor_account_number
			 FROM `sgp_transactions` `a` JOIN `sgp_vendors` `b` ON `a`.`c_id`=`b`.`v_id` WHERE (`a`.`v_id` = '" . $v_id . "' OR `a`.`c_id` = '" . $v_id . "') AND `a`.`tr_type` IN('1','2') ORDER BY `a`.`tr_timestamp` DESC LIMIT 1000";

                # download configuration
                $query = $this->db->query($sql);
                $this->load->dbutil();
                $delimiter = ";";
                $newline = PHP_EOL;
                $enclosure = '"';
                $this->load->helper('download');

                # force download the report
                force_download("Report.csv", $this->dbutil->csv_from_result($query, $delimiter, $newline, $enclosure));
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

}
