<?php

//defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_login');

//        if ($this->session->userdata('status') == 'login') {
//            header('location:'.base_url());
//        }
    }

    public function index() {
        $this->load->view('v_login');
    }

    public function login() {
        $cek = $this->M_login->login();
        if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $hasil) {
                $session_data['status'] = 'login';
                $session_data['id_petugas'] = $hasil->id_petugas;
                $session_data['nama'] = $hasil->nama;
                $session_data['username'] = $hasil->username;
                $this->session->set_userdata($session_data);
            }
            header('location:' . base_url() . '');
        } else {
            $data['notif'] = "<strong>Login gagal!</strong> Username atau password salah.";
            $this->load->view('v_login', $data);
        }
    }

    public function login_poli() {
        if ($this->input->post('username')) {
            $cek = $this->M_login->login_poli();
            if ($cek->num_rows() > 0) {
                foreach ($cek->result() as $hasil) {
                    $session_data['status'] = 'login';
                    $session_data['id_poli'] = $hasil->id_poli;
                    $session_data['nama'] = $hasil->nama;
                    $session_data['username'] = $hasil->username;
                    $this->session->set_userdata($session_data);
                }
                header('location:' . base_url() . 'C_app_poli');
            } else {
                $data['notif'] = "<strong>Login gagal!</strong> Username atau password salah.";
                $this->load->view('app_poli/v_login_poli', $data);
            }
        } else {
            $this->load->view('app_poli/v_login_poli');
        }
    }

}
