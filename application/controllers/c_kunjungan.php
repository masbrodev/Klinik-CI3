<?php

class c_kunjungan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_kunjungan');
        $this->load->model('m_pasien');
        $this->load->helper('url');
        
        if ($this->session->userdata('status') != 'login') {
            redirect('C_login');
        }
    }

    public function index() {
        $data['judul1'] = 'Kunjungan';
        $data['judul2'] = 'Pasien';
        $tgl_skg = date("Y-m-d");
        $data['kunjungan'] = $this->m_kunjungan->semua_data($tgl_skg);
        $data['contents'] = 'kunjungan/v_kunjungan';
        $this->load->view('v_template', $data); //template pada folder view
    }
    
    public function cari() {
        $data['judul1'] = 'Kunjungan';
        $data['judul2'] = 'Pasien';
        $data['kunjungan'] = $this->m_kunjungan->cari();
        $data['contents'] = 'kunjungan/v_kunjungan';
        $this->load->view('v_template', $data);
        
    }
    
    public function detail($id) {
        $data['pasien'] = $this->m_pasien->detail2($id);
        $data['contents'] = 'pasien/v_detail';
        $this->load->view('v_template', $data);
    }

    public function tambah() {
        if ($this->input->post('bt_simpan')) {
            $this->m_pasien->tambah();
            redirect('c_pasien');
        } else {
            $data['judul1'] = 'Pasien';
            $data['judul2'] = 'Tambah Data';
            $data['contents'] = 'pasien/v_tambah';
            $this->load->view('v_template', $data);
        }        
    }
    

    public function edit($id) {
        if ($this->input->post('bt_simpan')) {
            $this->m_pasien->edit($id);
            $data['contents'] = 'pasien/v_edit';
            $this->load->view('v_template', $data);
            redirect('c_pasien');
        } else {
            $data['pasien'] = $this->m_pasien->detail($id);
            $data['judul1'] = 'Pasien';
            $data['judul2'] = 'Edit Data';
            $data['contents'] = 'pasien/v_edit';
            $this->load->view('v_template', $data); //template pada folder view
        }
    }

    public function hapus($id) {
        $this->m_pasien->hapus($id);
        $this->session->set_flashdata('k', 'hapus_berhasil');
        redirect('c_pasien');
    }

}
