<?php

//defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_kunjungan');
        $this->load->model('M_pasien');
        
        if ($this->session->userdata('status') != 'login') {
            redirect('C_login');
        }
    }

    public function index() {
        $tgl_skg = date("Y-m-d");
        $data['judul1'] = 'Beranda';
        $data['judul2'] = '';
        $data['contents'] = 'v_dashboard';
        $data['total_kunjungan'] = $this->M_kunjungan->total_kunjungan(0);
        $data['kunjungan_hari_ini'] = $this->M_kunjungan->kunjungan_hari_ini(0, $tgl_skg);
        $data['total_pasien'] = $this->M_pasien->total_pasien();
        $this->load->view('v_template', $data);
    }        


    public function logout() {
        $this->session->sess_destroy();
        header('location:'.base_url());
    }
       
}
