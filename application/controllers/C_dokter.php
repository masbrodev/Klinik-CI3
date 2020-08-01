<?php

class C_dokter extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_dokter');
        $this->load->helper('url');       
        
       if ($this->session->userdata('status') != 'login') {
           redirect('C_login');
       }
    }

    public function index() {
        $data['judul1'] = 'DOKTER';
        $data['judul2'] = '';
        $data['dokter'] = $this->M_dokter->semua_data();
        $data['contents'] = 'app_poli/dokter/v_index';
        $this->load->view('app_poli/v_template_poli', $data); //template pada folder view
    }
    
    // public function cari() {
    //     $data['hasil_cari'] = $this->M_dokter->cari();
    //     $data['contents'] = 'dokter/v_cari';
    //     $this->load->view('v_template', $data);
        
    // }
    
    public function detail($id) {
        $data['dokter'] = $this->M_dokter->detail2($id);
        $data['contents'] = 'app_poli/dokter/v_detail';
        $this->load->view('app_poli/v_template_poli', $data);
    }

    public function tambah() {
        if ($this->input->post('bt_simpan')) {
            $this->M_dokter->tambah();
            redirect('C_dokter');
        } else {
            $data['judul1'] = 'dokter';
            $data['judul2'] = 'Tambah Data';
            $data['contents'] = 'app_poli/dokter/v_tambah';
            $this->load->view('app_poli/v_template_poli', $data);
        }        
    }
    

    public function edit($id) {
        if ($this->input->post('bt_simpan')) {
            $this->M_dokter->edit($id);
            $data['contents'] = 'app_poli/dokter/v_edit';
            $this->load->view('app_poli/v_template_poli', $data);
            redirect('C_dokter');
        } else {
            $data['dokter'] = $this->M_dokter->detail($id);
            $data['judul1'] = 'dokter';
            $data['judul2'] = 'Edit Data';
            $data['contents'] = 'app_poli/dokter/v_edit';
            $this->load->view('app_poli/v_template_poli', $data); //template pada folder view
        }        
    }

    public function hapus($id) {
        $this->M_dokter->hapus($id);
        $this->session->set_flashdata('k', 'hapus_berhasil');
        redirect('C_dokter');
    }

}
