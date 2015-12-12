<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("vendor_model", "vendor");
        $this->load->model("customer_model", "customer");
        $this->load->model("transaction_model", "transaction");
    }

    public function processPayment() {
        try {
            $v_id = $this->uri->segment(3);
            $c_id = $this->uri->segment(4);
            $t_id = $this->uri->segment(5);
            $amount = $this->uri->segment(6);
            $error_message = "You have provided an invalid payment URL. Please provide a correct URL which was sent to you on the email. Please note that AyjoConsulting monitors all invalid attempts to access this page and we can take an action against you in case we find any attempts of frauds.";
            if (is_null($v_id) || is_null($c_id) || is_null($t_id) || is_null($amount)) {
                throw new Exception($error_message);
            } else {
                $customer = $this->customer->get_cust($c_id);
                $vendor = $this->vendor->get_vendor($v_id);
                $transaction = $this->transaction->get_transaction($t_id);
                if (empty($customer)) {
                    throw new Exception($error_message);
                } else if (empty($vendor)) {
                    throw new Exception($error_message);
                } else if (empty($transaction)) {
                    throw new Exception($error_message);
                } else {
                    $customer = $customer[0];
                    $vendor = $vendor[0];
                    $transaction = $transaction[0];
                    if ($c_id !== $transaction['c_id'] || $v_id !== $transaction['v_id'] || (double) $amount !== (double) $transaction['tr_amount']) {
                        throw new Exception($error_message);
                    } else {
                        if ($transaction['tr_status'] == '1') {
                            throw new Exception("This Invoice is already paid");
                        } else {
                            $payment['first_name'] = $customer['c_name'];
                            $payment['phone_number'] = $customer['c_contact'];
                            $payment['email'] = $customer['c_email'];
                            $payment['amount'] = $transaction['tr_amount'];
                            $payment['invoice'] = $transaction['tr_id'];
                            $payment['v_name'] = $vendor['v_name'];
                            $payment['v_email'] = $vendor['v_email'];
                            $payment['customer_id'] = $customer['c_id'];
                            $payment['vendor_id'] = $vendor['v_id'];
                            $this->load->view("ayjoconsulting/onlinePayment/show-payment-form", $payment);
                        }
                    }
                }
            }
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

    private function sanitize($dirtyString) {
        return trim(htmlspecialchars($dirtyString, ENT_QUOTES));
    }

    public function transactionStatusDetails() {
        try {
            $tr_id = $this->sanitize($this->input->post("x_request_hash_i"));
            $c_id = $this->sanitize($this->input->post("x_request_hash_c"));
            $v_id = $this->sanitize($this->input->post("x_request_hash_v"));

            $temp['x_response_subcode'] = $this->sanitize($this->input->post("x_response_subcode"));
            $temp['x_response_reason_code'] = $this->sanitize($this->input->post("x_response_reason_code"));
            $temp['x_response_reason_text'] = $this->sanitize($this->input->post("x_response_reason_text"));
            $temp['x_auth_code'] = $this->sanitize($this->input->post("x_auth_code"));
            $temp['x_avs_code'] = $this->sanitize($this->input->post("x_avs_code"));
            $temp['x_trans_id'] = $this->sanitize($this->input->post("x_trans_id"));
            $temp['x_invoice_num'] = $this->sanitize($this->input->post("x_invoice_num"));
            $temp['x_description'] = $this->sanitize($this->input->post("x_description"));
            $temp['x_amount'] = $this->sanitize($this->input->post("x_amount"));
            $temp['x_address'] = $this->sanitize($this->input->post("x_address"));
            $temp['x_city'] = $this->sanitize($this->input->post("x_city"));
            $temp['x_state'] = $this->sanitize($this->input->post("x_state"));
            $temp['x_zip'] = $this->sanitize($this->input->post("x_zip"));
            $temp['x_email'] = $this->sanitize($this->input->post("x_email"));
            $temp['exact_ctr'] = trim(str_replace("\n", "<br/>", $this->input->post("exact_ctr")));
            $temp['Client_IP'] = $this->sanitize($this->input->post("Client_IP"));
            $temp['Transaction_Approved'] = $this->sanitize($this->input->post("Transaction_Approved"));
            $temp['EXact_Resp_Code'] = $this->sanitize($this->input->post("EXact_Resp_Code"));
            $temp['EXact_Message'] = $this->sanitize($this->input->post("EXact_Message"));
            $temp['Bank_Resp_Code'] = $this->sanitize($this->input->post("Bank_Resp_Code"));
            $temp['Bank_Message'] = $this->sanitize($this->input->post("Bank_Message"));
            $temp['Bank_Resp_Code_2'] = $this->sanitize($this->input->post("Bank_Resp_Code_2"));
            $temp['SequenceNo'] = $this->sanitize($this->input->post("SequenceNo"));
            $temp['AVS'] = $this->sanitize($this->input->post("AVS"));
            $temp['CVV2'] = $this->sanitize($this->input->post("CVV2"));
            $temp['Retrieval_Ref_No'] = $this->sanitize($this->input->post("Retrieval_Ref_No"));
            $temp['CAVV_Response'] = $this->sanitize($this->input->post("CAVV_Response"));
            $temp['TransactionCardType'] = $this->sanitize($this->input->post("TransactionCardType"));
            $temp['MerchantName'] = $this->sanitize($this->input->post("MerchantName"));
            $temp['MerchantAddress'] = $this->sanitize($this->input->post("MerchantAddress"));
            $temp['MerchantCity'] = $this->sanitize($this->input->post("MerchantCity"));
            $temp['MerchantProvince'] = $this->sanitize($this->input->post("MerchantProvince"));
            $temp['MerchantCountry'] = $this->sanitize($this->input->post("MerchantCountry"));
            $temp['MerchantPostal'] = $this->sanitize($this->input->post("MerchantPostal"));
            $temp['Card_Number'] = $this->sanitize($this->input->post("Card_Number"));
            $temp['DollarAmount'] = $this->sanitize($this->input->post("DollarAmount"));
            $temp['x_MD5_Hash'] = $this->input->post("x_MD5_Hash");
            $temp['tr_timestamp'] = strtotime(date("Y-m-d H:i:s"));

            $transaction = $this->transaction->get_transaction($tr_id);
            if (!empty($transaction) && count($transaction) > 0) {
                $transaction = $transaction[0];
                $c_id = $transaction['c_id'];
                $v_id = $transaction['v_id'];
                $customer = $this->customer->get_cust($c_id);
                $vendor = $this->vendor->get_vendor($v_id);
                $customer = $customer[0];
                $vendor = $vendor[0];

                $where = array(
                    "tr_id" => $transaction['tr_id'],
                    "v_id" => $transaction['v_id'],
                    "c_id" => $transaction['c_id']
                );

                if ($temp['x_response_reason_code'] == '1' && $temp['EXact_Resp_Code'] == "00") {
                    $temp['tr_status'] = '1';
                    $message = file_get_contents("resources/payment_status_success.html");
                    if ($message) {
                        $message = str_replace("#invoice_number#", $transaction['tr_id'], $message);
                        $message = str_replace("#customer_name#", $customer['c_name'], $message);
//                        $message = str_replace("#vendor_name#", $vendor['v_name'], $message);
                        $message = str_replace("#amount#", $temp['DollarAmount'], $message);
                        $message = str_replace("#credit_card_name#", "AyjoConsulting", $message);
                        $message = str_replace("#customer_email#", $customer['c_email'], $message);
                        $message = str_replace("#date#", date("Y-m-d H:i:s"), $message);
                    }
                    $subject = "Payment successful: Invoice number-" . $transaction['tr_id'];
                } else if ($temp['x_response_reason_code'] == '2') {
                    $temp['tr_status'] = '2';
                    $customer_name = $customer['c_name'];
                    $amount = $temp['DollarAmount'];
                    $bank_response = $temp['Bank_Message'];
                    $transaction_status = $temp['x_response_reason_text'];
                    $message = "Hi $customer_name,<br /><br /> Your transaction of amount : " . $amount .
                            " was declined because of the reason $bank_response.<br /><br />The transaction status is : " .
                            $transaction_status . ". <br /><br />" .
                            "Please find the transaction summary below:" . str_replace(array("<br/>AYJOCONSULTING", "<br/>4001 S BENJAMEN DR", "<br/>SIOUX FALLS, SD 57103", "<br/>United States", "<br/>WWW.AYJOCONSULTING.COM"), "", $temp['exact_ctr']) .
                            "<br /><br />Thanks,<br/>AyjoConsulting Admin.";
                    $subject = "Transaction Declined: Invoice number-" . $transaction['tr_id'];
                } else if ($temp['x_response_reason_code'] == '3') {
                    $temp['tr_status'] = '2';
                    $subject = "Error Processing your transaction: Invoice number-" . $transaction['tr_id'];
                    $transaction_status = $temp['x_response_reason_text'];
                    $amount = $temp['DollarAmount'];
                    $customer_name = $customer['c_name'];
                    $message = "Hi $customer_name,<br /><br /> There was an error processing your transaction of amount : " . $amount .
                            ". The transaction status is : " . $transaction_status . ". <br /><br />" .
                            "Please find the transaction summary below:" . str_replace(array("<br/>AYJOCONSULTING", "<br/>4001 S BENJAMEN DR", "<br/>SIOUX FALLS, SD 57103", "<br/>United States", "<br/>WWW.AYJOCONSULTING.COM"), "", $temp['exact_ctr']) .
                            "<br /><br />Thanks,<br/>AyjoConsulting Admin.";
                }
                if ($this->transaction->save_transaction($temp, $where)) {
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
                    $this->email->subject($subject);
                    $this->email->message($message);
                    $this->email->to($customer['c_email']);
                    $this->email->bcc(array($vendor['v_email'], 'ay.khaitan@gmail.com', 'srivprakhar@gmail.com', 'admin@ayjoconsulting.com'));
                    $this->email->from('admin@ayjoconsulting.com', "AyjoConsulting Admin");


                    if (!$this->email->send()) {
                        $email_status = "There was an error sending an email to $c_email. You can copy the URL below and send it to customer for making payments";
                        $this->customer_manage_form($email_status, $href);
                    }
                }
            } else {
                throw new Exception("Transaction id not available in the system. Please check with your service provider");
            }
            $this->load->view("ayjoconsulting/onlinePayment/response-details");
        } catch (Exception $e) {
            $this->load->view("ayjoconsulting/error-message", array("message" => $e->getMessage()));
        }
    }

}
