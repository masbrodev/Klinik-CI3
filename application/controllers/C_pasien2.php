<?php

class C_pasien2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_pasien2');
        $this->load->helper('url');       
        
//        if ($this->session->userdata('status') != 'login') {
//            redirect('C_login');
//        }
    }

    public function index() {
        $data['judul1'] = 'Pasien';
        $data['judul2'] = '';
        $data['pasien'] = $this->M_pasien2->semua_data();
        $data['contents'] = 'app_poli/pasien/v_index';
        $this->load->view('app_poli/v_template_poli', $data); //template pada folder view
    }
    
    public function cari() {
        $data['hasil_cari'] = $this->M_pasien2->cari();
        $data['contents'] = 'app_poli/pasien/v_cari';
        $this->load->view('app_poli/v_template_poli', $data);
        
    }
    
    public function detail($id) {
        $data['pasien'] = $this->M_pasien2->detail2($id);
        $data['contents'] = 'app_poli/pasien/v_detail';
        $this->load->view('app_poli/v_template_poli', $data);
    }

    // public function tambah() {
    //     if ($this->input->post('bt_simpan')) {
    //         $this->M_pasien2->tambah2();
    //         redirect('C_pasien2');
    //     } else {
    //         $data['judul1'] = 'Pasien';
    //         $data['judul2'] = 'Tambah Data';
    //         $data['contents'] = 'app_poli/pasien/v_tambah';
    //         $this->load->view('app_poli/v_template_poli', $data);
    //     }        
    // }
    

    public function edit($id) {
        if ($this->input->post('bt_simpan')) {
            $this->M_pasien2->edit($id);
            $data['contents'] = 'app_poli/pasien/v_edit';
            $this->load->view('app_poli/v_template_poli', $data);
            redirect('C_pasien2');
        } else {
            $data['pasien'] = $this->M_pasien2->detail($id);
            $data['judul1'] = 'Pasien';
            $data['judul2'] = 'Edit Data';
            $data['contents'] = 'app_poli/pasien/v_edit';
            $this->load->view('app_poli/v_template_poli', $data); //template pada folder view
        }        
    }

    public function hapus($id) {
        $this->M_pasien2->hapus($id);
        $this->session->set_flashdata('k', 'hapus_berhasil');
        redirect('C_pasien2');
    }

}
