<?php

class C_laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_laporan');
        $this->load->helper('url');
        
        if ($this->session->userdata('status') != 'login') {
            redirect('C_login');
        }
    }

    public function index() {
        $data['judul1'] = 'Laporan';
        $data['judul2'] = 'Kunjungan Pasien';
        $data['contents'] = 'laporan/v_laporan';
        $this->load->view('v_template', $data); //template pada folder view
    }
    
    public function cari() {
        $data['judul1'] = 'Laporan';
        $data['judul2'] = 'Kunjungan Pasien';
        $data['kunjungan'] = $this->M_laporan->cari();
        $data['contents'] = 'laporan/v_laporan';
        $this->load->view('v_template', $data);
        
    }
    
    public function cetak() {
        $tgl_dari = $this->uri->segment(3);
        $tgl_sampai = $this->uri->segment(4);
        $data['kunjungan'] = $this->M_laporan->cetak($tgl_dari, $tgl_sampai);
        $data['tgl_dari'] = $tgl_dari;
        $data['tgl_sampai'] = $tgl_sampai;
        $this->load->view('laporan/v_cetak', $data);
    }
    
    public function excel() {
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=kunjungan.xls");
        $tgl_dari = $this->uri->segment(3);
        $tgl_sampai = $this->uri->segment(4);
        $data['kunjungan'] = $this->M_laporan->cetak($tgl_dari, $tgl_sampai);
        $data['tgl_dari'] = $tgl_dari;
        $data['tgl_sampai'] = $tgl_sampai;
        $this->load->view('laporan/v_excel', $data);
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
