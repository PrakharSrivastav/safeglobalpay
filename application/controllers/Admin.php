<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    private function sanitize($dirtyString) {
        return trim(htmlspecialchars($dirtyString, ENT_QUOTES));
    }

    public function index() {
        if ($this->session->userdata("is_logged_in")) {
            if ($this->session->userdata("v_role") == "0") {
                $this->load->model("vendor_model", "vendor");
                $result = $this->vendor->get_vendors();
                $this->load->view("ayjoconsulting/admin/admin-login-dashboard", array("result" => $result));
            } else if ($this->session->userdata("v_role") == "1") {
                $this->load->model("customer_model", "customer");
                $result = $this->customer->get_customers();
                $this->load->view("ayjoconsulting/vendor/vendor-login-dashboard", array("result" => $result));
            }
        } else {
            $this->session->sess_destroy();
            $this->load->view("ayjoconsulting/admin/admin-login");
        }
    }

    public function login() {
        try {
            $this->load->library('form_validation');
            $this->form_validation->set_rules("sgp_username", "Username", "required|min_length[5]");
            $this->form_validation->set_rules("sgp_password", "Password", "required|min_length[5]");
            if ($this->form_validation->run() === FALSE) {
                $this->load->view("ayjoconsulting/admin/admin-login");
            } else {
                $username = trim($this->input->post("sgp_username"));
                $password = trim($this->input->post("sgp_password"));
                $this->load->model("Vendor_model", "vendor");
                $data["v_name"] = $username;
                $data["v_pass"] = $password;
                if ($this->vendor->validate_password($data)) {
                    if ($this->session->userdata("v_status") == "0") {
                        $this->session->sess_destroy();
                        $this->load->view("ayjoconsulting/admin/admin-login", array("error" => "Your account is not active. Please activate your account and try again.<br /><br />"));
                    } else {
                        if ($this->session->userdata("v_role") == "0") {
                            $this->load->model("vendor_model", "vendor");
                            $result = $this->vendor->get_vendors();
                            $this->load->view("ayjoconsulting/admin/admin-login-dashboard", array("result" => $result));
                        } else if ($this->session->userdata("v_role") == "1") {
                            $this->load->model("customer_model", "customer");
                            $result = $this->customer->get_customers();
                            if ($this->session->userdata('v_agreed') == "1")
                                $this->load->view("ayjoconsulting/vendor/vendor-login-dashboard", array("result" => $result));
                            else
                                $this->load->view("ayjoconsulting/vendor/vendor-agreement");
                        }
                    }
                } else {
                    $this->load->view("ayjoconsulting/admin/admin-login", array("error" => "Username or Password do not match<br /><br />"));
                }
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->load->view("ayjoconsulting/admin/admin-login");
        // $this->load->view("ayjoconsulting/admin/admin-login");
    }

    public function vendor_create_form() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $this->load->view("ayjoconsulting/admin/create-vendors");
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function create_vendor() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $this->form_validation->set_rules("v_name", "Vendor Name", "required|min_length[5]|is_unique[sgp_vendors.v_name]");
                $this->form_validation->set_rules("v_email", "Vendor Email", "required|valid_email|is_unique[sgp_vendors.v_email]");
                $this->form_validation->set_rules("v_pass", "Password", "required|min_length[8]");
                $this->form_validation->set_rules("c_pass", "Confirm Password", "required|matches[v_pass]");
                $this->form_validation->set_rules("v_cont", "Contact Number", "required|numeric");
                $this->form_validation->set_rules("v_alt_cont", "Alternate Contact Number", "numeric");
                $this->form_validation->set_rules("v_percent", "Percentage Commission", "required|decimal");
                $this->form_validation->set_rules("v_reser", "Rolling Reserve", "required|decimal");
                $this->form_validation->set_rules("v_time", "Rolling Reserve Duration", "required|integer");
                $this->form_validation->set_rules("v_refund", "Refund Deductions", "required|decimal");
                $this->form_validation->set_rules("v_chargeback", "Chargeback Deductions", "required|decimal");
                $this->form_validation->set_rules("v_payment_term", "Payment Period to Vendor", "required|integer");
                $this->form_validation->set_rules("v_init_reserve", "Security Deposit", "required|decimal");
                $this->form_validation->set_rules("v_init_setup_reserve", "Setup Fees", "required|decimal");
                $this->form_validation->set_rules("v_account_name", "Vendor's Account Name", "required");
                $this->form_validation->set_rules("v_account_num", "Vendor's Account Number", "required");
                $this->form_validation->set_rules("v_bank_name", "Vendor's Bank Name", "required");

                if ($this->form_validation->run() === false)
                    $this->load->view("ayjoconsulting/admin/create-vendors");
                else {
                    
                    $vendor["v_name"] = $this->sanitize($this->input->post("v_name"));
                    $vendor["v_email"] = $this->sanitize($this->input->post("v_email"));
                    $vendor["v_password"] = password_hash($this->input->post("v_pass"), PASSWORD_BCRYPT);
                    $vendor["v_address"] = $this->sanitize($this->input->post("v_addr"));
                    $vendor["v_contact"] = $this->sanitize($this->input->post("v_cont"));
                    $vendor["v_alt_contact"] = $this->sanitize($this->input->post("v_alt_cont"));
                    $vendor["v_role"] = "1";
                    $vendor["v_status"] = "0";
                    $vendor["v_initial_reserve"] = $this->sanitize($this->input->post("v_init_reserve"));
                    $vendor["v_init_setup_reserve"] = $this->sanitize($this->input->post("v_init_setup_reserve"));
                    $vendor["v_payment_term"] = $this->sanitize($this->input->post("v_payment_term"));
                    $vendor["v_payment_date"] = $this->sanitize($this->input->post("v_payment_date"));
                    $vendor["v_chargeback_penalty"] = $this->sanitize($this->input->post("v_chargeback"));
                    $vendor["v_refund_penalty"] = $this->sanitize($this->input->post("v_refund"));
                    $vendor["v_rolling_res_duration"] = $this->sanitize($this->input->post("v_time"));
                    $vendor["v_rolling_res"] = $this->sanitize($this->input->post("v_reser"));
                    $vendor["v_percent"] = $this->sanitize($this->input->post("v_percent"));
                    $vendor["v_account_name"] = $this->sanitize($this->input->post("v_account_name"));
                    $vendor["v_account_num"] = $this->sanitize($this->input->post("v_account_num"));
                    $vendor["v_bank_name"] = $this->sanitize($this->input->post("v_bank_name"));
                    $vendor["v_bank_code"] = $this->sanitize($this->input->post("v_bank_code"));
                    $vendor["v_bank_swift_code"] = $this->sanitize($this->input->post("v_bank_swift_code"));
                    $vendor["v_bank_details"] = $this->sanitize($this->input->post("v_bank_details"));
                    $vendor["temp_pw"] = $this->sanitize($this->input->post("v_pass"));
                    $this->load->model("vendor_model", "vendor");
                    if ($this->vendor->add_vendor($vendor)) {
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

    public function vendor_manage_form() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $this->load->model("vendor_model", "vendor");
                $result = $this->vendor->get_vendors();
                $this->load->view("ayjoconsulting/admin/admin-manage-vendors", array("result" => $result));
            } else
                throw new Exception("You are not authorized to view this page Or your session has expired.");
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function view_vendor_details() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $v_id = $this->uri->segment(3);
                $this->load->model("vendor_model", "vendor");
                $result = $this->vendor->get_vendor($v_id);
                $this->load->view("ayjoconsulting/admin/view-vendor-details", array("result" => $result[0]));
            } else
                throw new Exception("You are not authorized to view this page Or your session has expired.");
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function toggle_vendor_status() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $v_id = $this->uri->segment(3);
                $status = $this->uri->segment(4);
                $this->load->model("vendor_model", "vendor");
                $result = $this->vendor->get_vendor($v_id);
                if ($result) {
                    $update = array("v_status" => $status);
                    $where = array("v_id" => $v_id, "v_role" => "1", "v_email" => $result[0]['v_email']);

                    if ($this->vendor->update_vendor($update, $where)) {
                        $this->vendor_manage_form();
                    }
                }
            } else
                throw new Exception("You are not authorized to view this page Or your session has expired.");
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function edit_vendor_details($v_id) {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $this->load->model('Vendor_model', 'vendor');
                $result = $this->vendor->get_vendor($v_id);
                if ($result) {
                    $this->load->view("ayjoconsulting/admin/edit-vendor-details", array("result" => $result[0]));
                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function update_vendor_detail() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $this->form_validation->set_rules("v_name", "Vendor Name", "required|min_length[5]");
                $this->form_validation->set_rules("v_email", "Vendor Email", "required|valid_email");
                $this->form_validation->set_rules("v_address", "Address", "required|min_length[8]");
                $this->form_validation->set_rules("v_percent", "Percentage Commission", "required|decimal");
                $this->form_validation->set_rules("v_rolling_res", "Rolling Reserve", "required|decimal");
                $this->form_validation->set_rules("v_rolling_res_duration", "Rolling Reserve Duration", "numeric");
                $this->form_validation->set_rules("v_refund_penalty", "Refund Deductions", "required|decimal");
                $this->form_validation->set_rules("v_chargeback_penalty", "Chargeback Deductions", "required|decimal");
                $this->form_validation->set_rules("v_payment_term", "Payment Period to Vendor", "required|numeric");
                $this->form_validation->set_rules("v_initial_reserve", "Security Deposit", "required|decimal");
                $this->form_validation->set_rules("v_init_setup_reserve", "Setup Fees", "required|decimal");
                $this->form_validation->set_rules("v_contact", "Vendor Contact", "required|numeric");
                $this->form_validation->set_rules("v_alt_contact", "Vendor Alternate Contact", "required|numeric");
                $this->form_validation->set_rules("v_account_name", "Vendor's Account Name", "required");
                $this->form_validation->set_rules("v_account_num", "Vendor's Account Number", "required");
                $this->form_validation->set_rules("v_bank_name", "Vendor's Bank Name", "required");

                $v_id = $this->uri->segment(3);
                if (strlen(trim($v_id)) < 1) {
                    throw new Exception("Empty vendor id provided for updating the data");
                } else {
                    if ($this->form_validation->run() === false) {
                        $this->edit_vendor_details($v_id);
                    } else {
                        $vendor['v_name'] = $this->sanitize($this->input->post("v_name"));
                        $vendor['v_email'] = $this->sanitize($this->input->post("v_email"));
                        $vendor['v_address'] = $this->sanitize($this->input->post("v_address"));
                        $vendor['v_percent'] = $this->sanitize($this->input->post("v_percent"));
                        $vendor['v_rolling_res'] = $this->sanitize($this->input->post("v_rolling_res"));
                        $vendor['v_rolling_res_duration'] = $this->sanitize($this->input->post("v_rolling_res_duration"));
                        $vendor['v_refund_penalty'] = $this->sanitize($this->input->post("v_refund_penalty"));
                        $vendor['v_chargeback_penalty'] = $this->sanitize($this->input->post("v_chargeback_penalty"));
                        $vendor['v_payment_term'] = $this->sanitize($this->input->post("v_payment_term"));
                        $vendor['v_initial_reserve'] = $this->sanitize($this->input->post("v_initial_reserve"));
                        $vendor['v_init_setup_reserve'] = $this->sanitize($this->input->post("v_init_setup_reserve"));
                        $vendor['v_contact'] = $this->sanitize($this->input->post("v_contact"));
                        $vendor['v_alt_contact'] = $this->sanitize($this->input->post("v_alt_contact"));
                        $vendor["v_account_name"] = $this->sanitize($this->input->post("v_account_name"));
                        $vendor["v_account_num"] = $this->sanitize($this->input->post("v_account_num"));
                        $vendor["v_bank_name"] = $this->sanitize($this->input->post("v_bank_name"));
                        $vendor["v_bank_code"] = $this->sanitize($this->input->post("v_bank_code"));
                        $vendor["v_bank_swift_code"] = $this->sanitize($this->input->post("v_bank_swift_code"));
                        $vendor["v_bank_details"] = $this->sanitize($this->input->post("v_bank_details"));

                        $where = array(
                            "v_id" => $v_id,
                            "v_role" => "1",
                            "v_email" => $vendor['v_email']
                        );
                        $this->load->model("vendor_model", "vendor");
                        if ($this->vendor->update_vendor($vendor, $where)) {
                            $this->view_vendor_details($v_id);
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

    public function email_vendor() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $this->load->model("Vendor_model", "vendor");
                $v_id = $this->uri->segment(3);
                $vendor = $this->vendor->get_vendor($v_id);
                // print_r($vendor);
                # generate activation key
                $rand_key = md5(uniqid($vendor[0]['v_email'], true));
                // print_r($rand_key);
                $update = array("v_activation_key" => $rand_key,);
                $where = array(
                    "v_id" => $vendor[0]['v_id'],
                    "v_email" => $vendor[0]['v_email'],
                    "v_status" => '0'
                );
                if ($this->vendor->update_vendor($update, $where)) {
                    $activation_url = site_url() . "/admin/activate_vendor/" . $v_id . "/" . $rand_key;
                    $message = file_get_contents("resources/vendor_activation.html");
                    if ($message) {
                        $message = str_replace("#name#", $vendor[0]['v_name'], $message);
                        $message = str_replace("#activation_url#", $activation_url, $message);
                        $message = str_replace("#username#", $vendor[0]['v_name'], $message);
                        $message = str_replace("#password#", $vendor[0]['temp_pw'], $message);
                    } else {
                        $message = "<div align='left' style='color:black'>Hello " . $vendor[0]['v_name'] . ",<br /><br/>We welcome you at <a href='" . site_url() . "/admin'>AyjoConsulting</a>.<br /><br />To activate your account, please click on the link below.<br /><br /><a href='$activation_url'><input type='button' style='background:blue;color:white;border:none;border-radius:5px;padding:8px;text-decoration:none !important' value='Activate Account'></button></a><br /><br />Thanks,<br />AyjoConsulting Admin</div>";
                    }


                    $this->load->library('email');
                    $this->email->clear();

                    $config['protocol'] = 'mail';
                    $config['mailtype'] = 'html';
                    $config['smtp_host'] = 'sg2plcpnl0003.prod.sin2.secureserver.net';
                    $config['smtp_crypto'] = 'ssl';
                    $config['smtp_user'] = 'info@ayjoconsulting.com';
                    $config['smtp_pass'] = 'm@k@s@k1n@k@';
                    $config['smtp_port'] = 465;
                    $config['charset'] = 'utf-8';
                    $config['wordwrap'] = false;

                    $this->email->initialize($config);
                    $this->email->subject("User activation email");
                    $this->email->message(trim($message));
                    $this->email->to($vendor[0]['v_email']);
                    $this->email->bcc(array('ay.khaitan@gmail.com', 'srivprakhar@gmail.com',  'admin@ayjoconsulting.com'));
                    $this->email->from("info@ayjoconsulting.com", "Ayjo Consulting Admin");
                    $this->email->reply_to('info@ayjoconsulting.com', "Ayjo Consulting Admin");

                    if ($this->email->send()) {
                        redirect(site_url() . "/admin/redirect_admin_mng_vend");
                    }
                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }
    
    public function redirect_admin_mng_vend(){
        $this->load->model("Vendor_model", "vendor");
        $result = $this->vendor->get_vendors();
        $status = "Activation email was sent successfully .";
//        echo "<script>alert($status);</script>";
         $this->load->view("ayjoconsulting/admin/admin-manage-vendors", array("result" => $result, "email_status" => $status));
    }

//    public function show_admin_details(){
//        echo password_hash("@Hit100Thousand#", PASSWORD_BCRYPT);
//    }
    
    
    public function payout_vendor($vnd_id = null) {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                if (!empty($vnd_id)) {
                    $v_id = $vnd_id;
                } else {
                    $v_id = $this->uri->segment(3);
                }
                $this->load->model("Transaction_model", "trans");
                $this->load->model("Vendor_model", "vend");

                # get the list of all the transactions
                $transactions = $this->trans->get_open_transactions($v_id);

                # get the details of the vendor by vendor-id
                $vendor = $this->vend->get_vendor($v_id);
                $percent = floatval($vendor[0]['v_percent']);

                //print_r($vendor);
                # variables
                $payment = 0.00;
                $cbk_amt = 0.00;
                $ref_amt = 0.00;
                $refund_penalty = 0.00;
                $chargeback_penalty = 0.00;
                $total = 0.00;
                if ($transactions !== false) {
                    foreach ($transactions as $record) {
                        if ($record['tr_type'] == '1')
                            $ref_amt += floatval($record['tr_amount']);
                        if ($record['tr_type'] == '2')
                            $cbk_amt += floatval($record['tr_amount']);
                        if ($record['tr_type'] == '0')
                            $payment += floatval($record['tr_amount']);
                    }
                }

                if ($cbk_amt > 0.00)
                    $chargeback_penalty = $cbk_amt * floatval($vendor[0]['v_chargeback_penalty']) / 100.00;
                if ($ref_amt > 0.00)
                    $refund_penalty = $ref_amt * floatval($vendor[0]['v_refund_penalty']) / 100.00;

                $comission = floatval($percent * $payment / 100.00);
                $current_rr_amount = (($payment - ($cbk_amt + $ref_amt)) * floatval($vendor[0]['v_rolling_res']) / 100.00);
                $calc_rr_amount = ($payment - ($cbk_amt + $ref_amt));
                $where = array(
                    "v_id" => $v_id,
                    "rr_month" => intval(date("m")),
                    "rr_status" => '0'
                );
                $rolling_res = $this->vend->get_rr_value($where);
                $old_rr_amount = floatval($rolling_res['rr_amount']) / 1.00;
                $total = (double) ($payment - ($comission + $ref_amt + $refund_penalty + $cbk_amt + $chargeback_penalty + $current_rr_amount) + $old_rr_amount) / 1.00;

                $this->load->view("ayjoconsulting/admin/vendor-payout-details", array(
                    "v_id" => $v_id,
                    "transactions" => $transactions,
                    "refund" => $ref_amt,
                    "chargeback" => $cbk_amt,
                    "payment" => $payment,
                    "comission" => $comission,
                    "chargeback_penalty" => $chargeback_penalty,
                    "refund_penalty" => $refund_penalty,
                    "total" => floatval($total / 0.99999999999999999),
                    "rr_calc_amount" => $calc_rr_amount,
                    "current_rr_amount" => $current_rr_amount,
                    "old_rr_amount" => $old_rr_amount,
                    "rr_id" => $rolling_res['id'],
                        )
                );
            }
            else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function process_vendor_payout() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $v_id = $this->uri->segment(3);

                $this->form_validation->set_rules("transaction_amount", "Payout Amount", "required|decimal");
                $this->form_validation->set_rules("transaction_description", "Transaction Description", "required|min_length[10]");
                $this->form_validation->set_rules("current_rr_amount", "Current Rolling Reserve", "required");
                // $this->form_validation->set_rules("rr_id", "Old Rolling Reserve id", "required");

                if ($this->form_validation->run() === false) {
//            $this->load->view("ayjoconsulting/admin/vendor-payout-details", array("v_id" => $v_id));
                    $this->payout_vendor($v_id);
                } else {
                    $amount = floatval($this->input->post("transaction_amount"));
                    $description = $this->input->post("transaction_description");

                    $transaction['v_id'] = $this->session->userdata("v_id");
                    $transaction['c_id'] = $v_id;
                    $transaction['tr_type'] = '3'; // 3 == payout
                    $transaction['tr_ref_id'] = $v_id;
                    $transaction['tr_amount'] = $amount;
                    $transaction['tr_description'] = $description;
                    $transaction['tr_timestamp'] = strtotime(date("Y-m-d H:i:s"));
                    $transaction['tr_status'] = '1';
                    $transaction['tr_po_status'] = '1';

                    $this->load->model("Transaction_model", "trans");
                    if ($this->trans->createTransaction($transaction)) {
                        if ($this->trans->perform_settlement($v_id)) {
                            $this->load->model("Vendor_model", "vendor");
                            $month = intval(date('m'));
                            if ($month == 10) {
                                $month = 1;
                            } else if ($month == 11) {
                                $month = 2;
                            } else if ($month == 12) {
                                $month = 3;
                            } else {
                                $month = $month + 3;
                            }
                            $data = array(
                                "v_id" => $v_id,
                                "rr_amount" => $this->input->post("current_rr_amount"),
                                "rr_month" => $month,
                                "rr_status" => '0'
                            );
                            if ($this->vendor->set_rr_value($data)) {
                                $rr_id = $this->input->post("rr_id");
                                if (!empty($rr_id)) {
                                    //$data = $this->input->post('rr_id');
                                    $this->vendor->update_last_rr_record($rr_id);
                                }
                                # get the vendor details
                                $vend = $this->vendor->get_vendor($v_id);

                                #read the html message file and replace the content
                                $message = file_get_contents("resources/payout_status_success.html");
                                if ($message) {
                                    $payment = $this->input->post("payment");
                                    $old_rr_amount = $this->input->post("old_rr_amount");
                                    $refund = $this->input->post("refund");
                                    $refund_penalty = $this->input->post("refund_penalty");
                                    $chargeback = $this->input->post("chargeback");
                                    $chargeback_penalty = $this->input->post("chargeback_penalty");
                                    $comission = $this->input->post("comission");
                                    $current_rr_amount = $this->input->post("current_rr_amount");
                                    $total = $this->input->post("transaction_amount");

                                    $message = str_replace("#vendor_name#", $vend[0]['v_name'], $message);
                                    $message = str_replace("#month#", date("M"), $message);
                                    $message = str_replace("#payment#", $payment, $message);
                                    $message = str_replace("#old_rr_amount#", $old_rr_amount, $message);
                                    $message = str_replace("#refund#", $refund, $message);
                                    $message = str_replace("#refund_penalty#", $refund_penalty, $message);
                                    $message = str_replace("#chargeback#", $chargeback, $message);
                                    $message = str_replace("#chargeback_penalty#", $chargeback_penalty, $message);
                                    $message = str_replace("#comission#", $comission, $message);
                                    $message = str_replace("#current_rr_amount#", $current_rr_amount, $message);
                                    $message = str_replace("#total#", $total, $message);
                                }

                                # send email
                                $this->load->library('email');
                                $this->email->clear();

                                $config['protocol'] = 'mail';
                                $config['mailtype'] = 'html';
                                $config['smtp_host'] = 'sg2plcpnl0003.prod.sin2.secureserver.net';
                                $config['smtp_crypto'] = 'ssl';
                                $config['smtp_user'] = 'info@ayjoconsulting.com';
                                $config['smtp_pass'] = 'm@k@s@k1n@k@';
                                $config['smtp_port'] = 465;
                                $config['charset'] = 'utf-8';
                                $config['wordwrap'] = false;

                                $this->email->initialize($config);
                                $this->email->subject("Payout Settlement for month -" . date("M-Y"));
                                $this->email->message(trim($message));
                                $this->email->to($vend[0]['v_email']);
                                $this->email->bcc(array('ay.khaitan@gmail.com', 'srivprakhar@gmail.com',  'admin@ayjoconsulting.com'));
                                $this->email->from("info@ayjoconsulting.com", "Ayjo Consulting Admin");
                                $this->email->reply_to('info@ayjoconsulting.com', "Ayjo Consulting Admin");

                                if ($this->email->send())
                                    $this->vendor_manage_form();
                            }
                        }
                    }
                }
            }
            else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function get_vendor_transactions() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $v_id = $this->uri->segment(3);
                $this->load->model("Transaction_model", "trans");
                $result = $this->trans->getVendorTransactions($v_id);
                // print_r($result);
                $this->load->view("ayjoconsulting/admin/vendor-transaction-details", array("result" => $result, "type" => "all"));
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function vendor_refund_chargeback() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $v_id = $this->uri->segment(3);
                $where = array("1", "2");
                $this->load->model("Transaction_model", "trans");
                $result = $this->trans->getVendorTransactions($v_id, $where);
                // print_r($v_id);
                $this->load->view("ayjoconsulting/admin/vendor-transaction-details", array("result" => $result, "type" => "0"));
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function activate_vendor() {

        try {
            $vendor_id = $this->uri->segment(3);
            $activation_key = $this->uri->segment(4);

            if (empty($vendor_id) || empty($activation_key)) {
                throw new Exception("Invalid activation url. Vendor will not be activated. Please ask your admin to generate a new key for you.");
            } else {
                $this->load->model("Vendor_model", "vendor");
                $vendor = $this->vendor->get_vendor($vendor_id);

                if (empty($vendor)) {
                    throw new Exception("Your account does not exist in our system. Please ask the admin to create your account and send you the activation key.");
                } else {
                    if (empty($vendor[0]['v_activation_key']) && $vendor[0]['v_status'] == '1') {
                        throw new Exception("Your account is already active. Please login into our system with your credentials");
                    } else {
                        if ($vendor[0]['v_status'] == '1') {
                            throw new Exception("Your account is already active in our system. Please try to login with your credentials in the system.");
                        } else {
                            $db_activation_key = trim($vendor[0]['v_activation_key']);

                            if ($db_activation_key === trim($activation_key)) {
                                $where = array(
                                    "v_id" => $vendor_id,
                                    "v_status" => "0",
                                    "v_email" => $vendor[0]['v_email'],
                                    "v_activation_key" => trim($activation_key),
                                );

                                $update = array(
                                    "v_status" => "1",
                                    "v_activation_key" => ""
                                );

                                if ($this->vendor->update_vendor($update, $where)) {
                                    $this->load->view("ayjoconsulting/vendor/vendor-activation-success");
                                }
                            } else {
                                throw new Exception("Bad activation key. Please ask your admin to generate a new key for you");
                            }
                        }
                    }
                }
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function vendor_reports() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $this->load->model("vendor_model", "vendor");
                $result = $this->vendor->get_vendors();
                // print_r($result);
                $this->load->view("ayjoconsulting/admin/vendor-reports", array("result" => $result));
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function vendor_payout_reports() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $v_id = $this->uri->segment(3);
                $where = array("3");
                $this->load->model("Transaction_model", "trans");
                $result = $this->trans->getVendorTransactions($v_id, $where);
                // print_r($v_id);
                $this->load->view("ayjoconsulting/admin/vendor-transaction-details", array("result" => $result, "type" => "1"));
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function vendor_payment_reports() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $v_id = $this->uri->segment(3);
                $where = array("0");
                $this->load->model("Transaction_model", "trans");
                $result = $this->trans->getVendorTransactions($v_id, $where);
                // print_r($v_id);
                $this->load->view("ayjoconsulting/admin/vendor-transaction-details", array("result" => $result, "type" => "2"));
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function process_download() {
        try {
            if ($this->session->userdata("is_logged_in")) {
                $v_id = $this->uri->segment(3);
                $type = $this->uri->segment(4);
                $sql = "";
                if ($type === "all")
                    $sql = "SELECT 
		b.v_id as vendor_id, 
		b.v_name as name,
		b.v_email as email,
		a.tr_id as transaction_id,
		a.tr_amount as amount,
		a.tr_description as description,
		a.tr_type as transaction_type,
		from_unixtime(a.tr_timestamp) as timestamp,
		b.v_bank_name as bank_name,
		b.v_account_num as vendor_account_number
		FROM `sgp_transactions` `a` JOIN `sgp_vendors` `b` ON `a`.`tr_ref_id`=`b`.`v_id` WHERE (`a`.`v_id` = '" . $v_id . " ' OR `a`.`c_id` = '" . $v_id . " ') ORDER BY `a`.`tr_timestamp` DESC";
                else if ($type === "2")
                    $sql = "SELECT  
		b.v_id as vendor_id, 
		b.v_name as name,
		b.v_email as email,
		a.tr_id as transaction_id,
		a.tr_amount as amount,
		a.tr_description as description,
		a.tr_type as transaction_type,
		from_unixtime(a.tr_timestamp) as timestamp,
		b.v_bank_name as bank_name,
		b.v_account_num as vendor_account_number
		FROM `sgp_transactions` `a` JOIN `sgp_vendors` `b` ON `a`.`tr_ref_id`=`b`.`v_id` WHERE (`a`.`v_id` = '" . $v_id . " ' OR `a`.`c_id` = '" . $v_id . "') AND `a`.`tr_type` IN('0') ORDER BY `a`.`tr_timestamp` DESC";
                else if ($type === "1")
                    $sql = "SELECT  
		b.v_id as vendor_id, 
		b.v_name as name,
		b.v_email as email,
		a.tr_id as transaction_id,
		a.tr_amount as amount,
		a.tr_description as description,
		a.tr_type as transaction_type,
		from_unixtime(a.tr_timestamp) as timestamp,
		b.v_bank_name as bank_name,
		b.v_account_num as vendor_account_number
		FROM `sgp_transactions` `a` JOIN `sgp_vendors` `b` ON `a`.`tr_ref_id`=`b`.`v_id` WHERE (`a`.`v_id` = '" . $v_id . "' OR `a`.`c_id` = '" . $v_id . "') AND `a`.`tr_type` IN('3') ORDER BY `a`.`tr_timestamp` DESC";
                else if ($type === "0")
                    $sql = "SELECT  
		b.v_id as vendor_id, 
		b.v_name as name,
		b.v_email as email,
		a.tr_id as transaction_id,
		a.tr_amount as amount,
		a.tr_description as description,
		a.tr_type as transaction_type,
		from_unixtime(a.tr_timestamp) as timestamp,
		b.v_bank_name as bank_name,
		b.v_account_num as vendor_account_number
		FROM `sgp_transactions` `a` JOIN `sgp_vendors` `b` ON `a`.`tr_ref_id`=`b`.`v_id` WHERE (`a`.`v_id` = '" . $v_id . "' OR `a`.`c_id` = '" . $v_id . "') AND `a`.`tr_type` IN('1','2') ORDER BY `a`.`tr_timestamp` DESC";

                # download configuration
                // print_r($sql);
                $query = $this->db->query($sql);
                $this->load->dbutil();
                $delimiter = ";";
                $newline = PHP_EOL;
                $enclosure = '"';
                $this->load->helper('download');

                # force download the report
                force_download("Report.csv", $this->dbutil->csv_from_result($query, $delimiter, $newline, $enclosure));
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function forget_pw() {
        try {
            // print_r($this->input->post());
            $email = trim($this->input->post("sgp_f_email"));
            $n_password = trim($this->input->post("sgp_f_password"));
            $c_password = trim($this->input->post("sgp_c_password"));

            # check if all the input parameters are provided
            if (empty($email) || empty($n_password) || empty($c_password)) {
                throw new Exception("Please provide complete details for activating your password");
            } else {
                # check if the password and the confirmed password match
                if ($n_password !== $c_password) {
                    throw new Exception("New password and Confirm password do not match. Please try again with proper details");
                } else {
                    # check if email-format is valid
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        throw new Exception("Please provide your registered email address");
                    } else {
                        $this->load->model("Vendor_model", "vendor");
                        $email_exists = $this->vendor->check_email($email);
//                        echo "email exists ? " ; var_dump($email_exists);
                        if ($email_exists) {
                            # Hash the password
                            $password = password_hash($n_password, PASSWORD_BCRYPT);
                            # Generate a password token
                            $token = uniqid();

                            $update = array("temp_pw" => $password, "temp_pw_token" => $token);
                            $where = array("v_email" => $email, "v_status" => '1');
                            $vendor_updated = $this->vendor->update_vendor($update, $where);
//                            echo "vendor updated ? " ; var_dump($vendor_updated);
                            if ($vendor_updated) {
                                $activation_url = site_url() . "/admin/reset_password/" . $email . "/" . $token;
                                $message = file_get_contents("resources/forget_password.html");
                                if ($message) {
                                    $message = str_replace("#activation_url#", $activation_url, $message);
                                } else {
                                    $message = "<div align='left' style='color:black'>Hello ,<br /><br/>You have requested a password reset for <a href='" . site_url() . "/admin'>AyjoConsulting</a>.<br /><br />To reset your password, please click on the link below. If this request was not initiated by you, then please inform the admin.<br /> You will be able to use this link only once to reset your password.<br /><br /><a href='$activation_url'><input type='button' style='background:blue;color:white;border:none;border-radius:5px;padding:8px;text-decoration:none !important' value='Reset Password'></button></a><br /><br />Thanks,<br />AyjoConsulting Admin</div>";
                                }


                                $this->load->library('email');
                                $this->email->clear();

                                $config['protocol'] = 'mail';
                                $config['mailtype'] = 'html';
                                $config['smtp_host'] = 'sg2plcpnl0003.prod.sin2.secureserver.net';
                                $config['smtp_crypto'] = 'ssl';
                                $config['smtp_user'] = 'info@ayjoconsulting.com';
                                $config['smtp_pass'] = 'm@k@s@k1n@k@';
                                $config['smtp_port'] = 465;
                                $config['charset'] = 'utf-8';
                                $config['wordwrap'] = false;

                                $this->email->initialize($config);
                                $this->email->subject("AyjoConsulting : Password Reset Request");
                                $this->email->message(trim($message));
                                $this->email->to(array($email));
                                $this->email->bcc(array('ay.khaitan@gmail.com', 'srivprakhar@gmail.com',  'admin@ayjoconsulting.com'));
                                $this->email->from("info@ayjoconsulting.com", "Ayjo Consulting Admin");
                                $this->email->reply_to('info@ayjoconsulting.com', "Ayjo Consulting Admin");

                                if ($this->email->send()) {
                                    $this->session->sess_destroy();
                                    $this->load->view("ayjoconsulting/admin/admin-login", array("message" => "A confirmation link has been sent to your registered email. Please follow the instructions in the email to login to your account."));
                                } else {
                                    $this->session->sess_destroy();
                                    $this->load->view("ayjoconsulting/admin/admin-login", array("message" => "There was problem in sending the acitvation email. Please try again"));
                                }
                            } else {
                                throw new Exception("Please provide your registered email address");
                            }
                        } else {
                            throw new Exception("Please provide your registered email address");
                        }
                    }
                }
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function reset_password() {
        try {
            $email = $this->uri->segment(3);
            $token = $this->uri->segment(4);

            if (empty($email) || empty($token)) {
                throw new Exception("Invalid url provided for password reset");
            } else {
                $email = str_replace("%40", "@", $email);
                $where = array("v_email" => trim($email), "temp_pw_token" => $token);
                $this->load->model("Vendor_model", "vendor");
                $v = $this->vendor->get_specific_vendor($where);
//                print_r($v);
//                print_r($where);
                if ($v !== false) {

                    $update = array("v_password" => $v[0]['temp_pw'], "temp_pw_token" => "", "temp_pw" => "");
                    $where = array("v_email" => $v[0]['v_email'], "v_id" => $v[0]['v_id']);
                    // print_r($where);
                    if ($this->vendor->update_vendor($update, $where)) {
                        $message = file_get_contents("resources/pass_reset_success.html");
                        if (!$message)
                            $message = "<div align='left' style='color:black'>Hello ,<br /><br/>Your password has been reset successfully. Please login to the application using your username and the new password.<br /><br />Thanks,<br />AyjoConsulting Admin</div>";

                        $this->load->library('email');
                        $this->email->clear();

                        $config['protocol'] = 'mail';
                        $config['mailtype'] = 'html';
                        $config['smtp_host'] = 'sg2plcpnl0003.prod.sin2.secureserver.net';
                        $config['smtp_crypto'] = 'ssl';
                        $config['smtp_user'] = 'info@ayjoconsulting.com';
                        $config['smtp_pass'] = 'm@k@s@k1n@k@';
                        $config['smtp_port'] = 465;
                        $config['charset'] = 'utf-8';
                        $config['wordwrap'] = false;

                        $this->email->initialize($config);
                        $this->email->subject("AyjoConsulting : Password Reset Request");
                        $this->email->message(trim($message));
                        $this->email->to(array($email));
                        $this->email->bcc(array('ay.khaitan@gmail.com', 'srivprakhar@gmail.com',  'admin@ayjoconsulting.com'));
                        $this->email->from("info@ayjoconsulting.com", "Ayjo Consulting Admin");
                        $this->email->reply_to('info@ayjoconsulting.com', "Ayjo Consulting Admin");


                        if ($this->email->send()) {
                            $this->session->sess_destroy();
                            $this->load->view("ayjoconsulting/admin/admin-login");
                        } else {
                            $this->session->sess_destroy();
                            $this->load->view("ayjoconsulting/admin/admin-login");
                        }
                    } else {
                        throw new Exception("Please provide your registered email address");
                    }
                } else {
                    throw new Exception("You have already reset your password using this link. Please try to login to the application using your latest password OR try to reset the password from the login page.");
                }
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function resend_username() {
        try {
            $email = trim($this->input->post("sgp_r_email"));
            if (empty($email)) {
                throw new Exception("Email address can not be empty. Please provide your registered email address");
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    throw new Exception("Invalid email format provided. Please provide your registered email address");
                } else {
                    $where = array("v_email" => $email);
                    $this->load->model("Vendor_model", "vendor");
                    $vend = $this->vendor->get_specific_vendor($where);
                    if ($vend === false) {
                        throw new Exception("The email-id you have enered does not exist in out system. Please provide your registerer email address");
                    } else {
                        $vendor_name = $vend[0]['v_name'];
                        $message = file_get_contents("resources/forget_username.html");
                        if ($message) {
                            $message = str_replace("#vendor_name#", $vendor_name, $message);
                        } else {
                            $message = "<div align='left' style='color:black'>Hello,<br /><br/>You have requested to send the username on your email address. <br/> Your registered userneame is : $vendor_name.<br /> Please login to the application using your username and the password.<br /><br />Thanks,<br />AyjoConsulting Admin</div>";
                        }

                        $this->load->library('email');
                        $this->email->clear();

                        $config['protocol'] = 'mail';
                        $config['mailtype'] = 'html';
                        $config['smtp_host'] = 'sg2plcpnl0003.prod.sin2.secureserver.net';
                        $config['smtp_crypto'] = 'ssl';
                        $config['smtp_user'] = 'info@ayjoconsulting.com';
                        $config['smtp_pass'] = 'm@k@s@k1n@k@';
                        $config['smtp_port'] = 465;
                        $config['charset'] = 'utf-8';
                        $config['wordwrap'] = false;

                        $this->email->initialize($config);
                        $this->email->subject("AyjoConsulting : Password Reset Request");
                        $this->email->message(trim($message));
                        $this->email->to(array($email));
                        $this->email->bcc(array('ay.khaitan@gmail.com', 'srivprakhar@gmail.com',  'admin@ayjoconsulting.com'));
                        $this->email->from("info@ayjoconsulting.com", "AyjoConsulting Admin");
                        $this->email->reply_to('info@ayjoconsulting.com', "AyjoConsulting Admin");

                        if ($this->email->send()) {
                            $this->session->sess_destroy();
                            $this->load->view("ayjoconsulting/admin/admin-login", array("message" => "Your username has been emailed to your registered email address."));
                        } else {
                            $this->session->sess_destroy();
                            $this->load->view("ayjoconsulting/admin/admin-login", array("message" => "Your username has been emailed to your registered email address."));
                        }
                    }
                }
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function send_email() {
        $message = file_get_contents("resources/sample.html");
        $this->load->library('email');
        $this->email->clear();

        $config['protocol'] = 'mail';
        $config['mailtype'] = 'html';
        $config['smtp_host'] = 'sg2plcpnl0003.prod.sin2.secureserver.net';
        $config['smtp_crypto'] = 'ssl';
        $config['smtp_user'] = 'info@ayjoconsulting.com';
        $config['smtp_pass'] = 'm@k@s@k1n@k@';
        $config['smtp_port'] = 465;
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = false;

        $this->email->initialize($config);
        $this->email->subject("AyjoConsulting : Charges and Fees");
        $this->email->message(trim($message));
        $this->email->to(array('srivprakhar@gmail.com'));
        $this->email->from("info@ayjoconsulting.com", "AyjoConsulting Admin");
        $this->email->reply_to('info@ayjoconsulting.com', "AyjoConsulting Admin");

        $this->email->send();
    }

    public function cb_ref_vendor() {
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $v_id = $this->uri->segment(3);
                $this->load->view("ayjoconsulting/admin/refund-chargeback-form", array("v_id" => $v_id));
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    public function process_refund_chargeback() {
        //print_r($this->input->post());
        try {
            if ($this->session->userdata("is_logged_in") && ($this->session->userdata("v_role") == "0")) {
                $v_id = $this->uri->segment(3);
                $this->form_validation->set_rules("chargeback_refund_amount", "Amount", "required|decimal");
                $this->form_validation->set_rules("description", "Description", "required|min_length[10]");
                if ($this->form_validation->run() === false) {
                    $this->load->view("ayjoconsulting/admin/refund-chargeback-form", array("v_id" => $v_id));
                } else {
                    $amount = $this->input->post("chargeback_refund_amount");
                    $description = $this->input->post("description");
                    $tr_type = $this->input->post("chargeback_refund");

                    $this->load->model("Transaction_model", "trans");

                    $transaction['v_id'] = $this->session->userdata("v_id");
                    $transaction['c_id'] = $v_id;
                    $transaction['tr_type'] = $tr_type; // 1==refund, 2== chargeback , 3 == payout
                    $transaction['tr_ref_id'] = $v_id;
                    $transaction['tr_amount'] = $amount;
                    $transaction['tr_description'] = $description;
                    $transaction['tr_timestamp'] = strtotime(date("Y-m-d H:i:s"));
                    $transaction['tr_status'] = '1';
                    $transaction['tr_po_status'] = '0';

                    if ($this->trans->createTransaction($transaction)) {
                        $this->vendor_reports();
                    }
                }
            } else {
                throw new Exception("You are not authorized to view this page Or your session has expired.");
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

}
