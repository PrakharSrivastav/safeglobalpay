<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Utilities extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->dbutil();
        $this->load->helper('file');
    }

    public function db_backup() {
        $prefs = array(
            'tables' => array(),
            'ignore' => array(),
            'format' => 'zip',
            'filename' => date("d_m_y_H_i") . '.zip',
            'add_drop' => TRUE,
            'add_insert' => TRUE,
            'newline' => "\n"
        );
        $backup = & $this->dbutil->backup($prefs);
        $path = "backups/" . $prefs['filename'];
        write_file($path, $backup);
        $this->load->helper('download');
        force_download($path, $backup);
    }

    public function email_backups() {
        $prefs = array(
            'tables' => array(),
            'ignore' => array(),
            'format' => 'zip',
            'filename' => date("d_m_y_H_i") . '.zip',
            'add_drop' => TRUE,
            'add_insert' => TRUE,
            'newline' => "\n"
        );
        $backup = & $this->dbutil->backup($prefs);
        $path = "backups/" . $prefs['filename'];
        write_file($path, $backup);
        $this->load->library('email');
        $this->email->clear();
        $config['protocol'] = 'mail';
        $config['mailtype'] = 'text';
        $config['smtp_host'] = 'sg2plcpnl0003.prod.sin2.secureserver.net';
        $config['smtp_crypto'] = 'ssl';
        $config['smtp_user'] = 'info@ayjoconsulting.com';
        $config['smtp_pass'] = 'm@k@s@k1n@k@';
        $config['smtp_port'] = 465;
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = false;
        $this->email->initialize($config);
        $this->email->subject("Database backup : " . date("Y-m-d H:i"));
        $this->email->message("Database backup for " . date("Y-m-d H:i"));
        $this->email->to(array("admin@ayjoconsulting.com", "ay.khaitan@gmail.com", "srivprakhar@gmail.com"));
        $this->email->attach($path);
        $this->email->from('admin@ayjoconsulting.com', "AyjoConsulting Admin");
        $this->email->send();
    }

}
