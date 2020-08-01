<?php

class C_poli extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_poli');
        $this->load->helper('url');       
        
       if ($this->session->userdata('status') != 'login') {
           redirect('C_login');
       }
    }

    public function index() {
        $data['judul1'] = 'Poli';
        $data['judul2'] = '';
        $data['poli'] = $this->M_poli->semua_data();
        $data['contents'] = 'poli/v_index';
        $this->load->view('v_template', $data); //template pada folder view
    }
    
    public function cari() {
        $data['hasil_cari'] = $this->M_poli->cari();
        $data['contents'] = 'poli/v_cari';
        $this->load->view('v_template', $data);
        
    }
    
    public function detail($id) {
        $data['poli'] = $this->M_poli->detail($id);
        $data['contents'] = 'poli/v_detail';
        $this->load->view('v_template', $data);
    }

    public function tambah() {
        if ($this->input->post('bt_simpan')) {
            $this->M_poli->tambah();
            redirect('C_poli');
        } else {
            $data['judul1'] = 'Poli';
            $data['judul2'] = 'Tambah Data';
            $data['contents'] = 'poli/v_tambah';
            $this->load->view('v_template', $data);
        }        
    }
    

    public function edit($id) {
        if ($this->input->post('bt_simpan')) {
            $this->M_poli->edit($id);
            $data['contents'] = 'poli/v_edit';
            $this->load->view('v_template', $data);
            redirect('C_poli');
        } else {
            $data['poli'] = $this->M_poli->detail($id);
            $data['judul1'] = 'Poli';
            $data['judul2'] = 'Edit Data';
            $data['contents'] = 'poli/v_edit';
            $this->load->view('v_template', $data); //template pada folder view
        }        
    }

    public function hapus($id) {
        $this->M_poli->hapus($id);
        $this->session->set_flashdata('k', 'hapus_berhasil');
        redirect('C_poli');
    }

}
