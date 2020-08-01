<?php

class c_petugas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_petugas');
        $this->load->helper('url');       
        
//        if ($this->session->userdata('status') != 'login') {
//            redirect('C_login');
//        }
    }

    public function index() {
        $data['judul1'] = 'Petugas';
        $data['judul2'] = '';
        $data['petugas'] = $this->m_petugas->semua_data();
        $data['contents'] = 'petugas/v_index';
        $this->load->view('v_template', $data); //template pada folder view
    }
    
    public function cari() {
        $data['hasil_cari'] = $this->m_petugas->cari();
        $data['contents'] = 'petugas/v_cari';
        $this->load->view('v_template', $data);
        
    }
    
    public function detail($id) {
        $data['petugas'] = $this->m_petugas->detail2($id);
        $data['contents'] = 'petugas/v_detail';
        $this->load->view('v_template', $data);
    }

    public function tambah() {
        if ($this->input->post('bt_simpan')) {
            $this->m_petugas->tambah();
            redirect('c_petugas');
        } else {
            $data['judul1'] = 'Petugas';
            $data['judul2'] = 'Tambah Data';
            $data['contents'] = 'petugas/v_tambah';
            $this->load->view('v_template', $data);
        }        
    }
    

    public function edit($id) {
        if ($this->input->post('bt_simpan')) {
            $this->m_petugas->edit($id);
            $data['contents'] = 'petugas/v_edit';
            $this->load->view('v_template', $data);
            redirect('c_petugas');
        } else {
            $data['petugas'] = $this->m_petugas->detail($id);
            $data['judul1'] = 'Petugas';
            $data['judul2'] = 'Edit Data';
            $data['contents'] = 'petugas/v_edit';
            $this->load->view('v_template', $data); //template pada folder view
        }        
    }

    public function hapus($id) {
        $this->m_petugas->hapus($id);
        $this->session->set_flashdata('k', 'hapus_berhasil');
        redirect('c_petugas');
    }

}
