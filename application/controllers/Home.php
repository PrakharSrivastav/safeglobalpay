<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('home_page', array('active' => 'home_page', 'title' => 'Home'));
    }

    public function services() {
        $this->load->view('services', array('active' => 'services', 'title' => 'Services'));
    }

    public function pricing() {
        $this->load->view('pricing-detail', array('active' => 'pricing', 'title' => 'Pricing'));
    }

    public function contact() {
        $this->load->view('contact', array('active' => 'contact', 'title' => 'Contact Us'));
    }

    public function privacy() {
        $this->load->view('privacy', array('active' => 'privacy', 'title' => 'Privacy & Policy'));
    }

    public function refund() {
        $this->load->view('refund-policy', array('active' => 'refund-policy', 'title' => 'Refund Policy'));
    }

    public function terms() {
        $this->load->view('terms-of-service', array('active' => 'terms-of-service', 'title' => 'Terms of Service'));
    }

    public function disclaimer() {
        $this->load->view('disclaimer', array('active' => 'disclaimer', 'title' => 'Disclaimer'));
    }

    public function checkout_product() {
        $id = $this->uri->segment(3);
        // echo $id;
        $this->load->view('pricing', array('active' => 'pricing', "id" => $id));
    }

    private function sanitize($dirtyString) {
        return trim(htmlspecialchars($dirtyString, ENT_QUOTES));
    }
    
    public function contact_message() {
        if ($this->input->is_ajax_request()) {
            $contact_name = $this->sanitize($this->input->post("contact_name"));
            $email = $this->sanitize($this->input->post("email"));
            $subject = $this->sanitize($this->input->post("subject"));
            $message = $this->sanitize($this->input->post("message"));

            if (!$contact_name) {
                die(json_encode(1001));
            }

            if (!$email) {
                die(json_encode(1002));
            }

            if (!$subject) {
                die(json_encode(1003));
            }

            if (!$message) {
                die(json_encode(1004));
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
            $this->email->subject($subject);
            $this->email->message(trim($message));
            $this->email->to(array('info@ayjoconsulting.com'));
            $this->email->bcc(array('ay.khaitan@gmail.com', 'srivprakhar@gmail.com', 'admin@ayjoconsulting.com'));
            $this->email->from($email, $contact_name);
            $this->email->reply_to($email, $contact_name);

            if ($this->email->send()) {
                echo json_encode("success");
            }
        }
    }

    public function agreements() {
        $this->load->view("ayjoconsulting/termsandconditions");
    }

}
