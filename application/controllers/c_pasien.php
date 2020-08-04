<?php

class C_pasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_pasien');
        $this->load->helper('url');       
        
//        if ($this->session->userdata('status') != 'login') {
//            redirect('c_login');
//        }
    }

    public function index() {
        $data['judul1'] = 'Pasien';
        $data['judul2'] = '';
        $data['pasien'] = $this->M_pasien->semua_data();
        $data['contents'] = 'pasien/v_index';
        $this->load->view('v_template', $data); //template pada folder view
    }
    
    public function cari() {
        $data['hasil_cari'] = $this->M_pasien->cari();
        $data['contents'] = 'pasien/v_cari';
        $this->load->view('v_template', $data);
        
    }
    
    public function detail($id) {
        $data['pasien'] = $this->M_pasien->detail2($id);
        $data['contents'] = 'pasien/v_detail';
        $this->load->view('v_template', $data);
    }

    public function tambah() {
        if ($this->input->post('bt_simpan')) {
            $this->M_pasien->tambah();
            redirect('C_pasien');
        } else {
            $data['judul1'] = 'Pasien';
            $data['judul2'] = 'Tambah Data';
            $data['contents'] = 'pasien/v_tambah';
            $this->load->view('v_template', $data);
        }        
    }
    

    public function edit($id) {
        if ($this->input->post('bt_simpan')) {
            $this->M_pasien->edit($id);
            $data['contents'] = 'pasien/v_edit';
            $this->load->view('v_template', $data);
            redirect('C_pasien');
        } else {
            $data['pasien'] = $this->M_pasien->detail($id);
            $data['judul1'] = 'Pasien';
            $data['judul2'] = 'Edit Data';
            $data['contents'] = 'pasien/v_edit';
            $this->load->view('v_template', $data); //template pada folder view
        }        
    }

    public function hapus($id) {
        $this->M_pasien->hapus($id);
        $this->session->set_flashdata('k', 'hapus_berhasil');
        redirect('C_pasien');
    }

}
