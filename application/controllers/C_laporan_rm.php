<?php

class C_laporan_rm extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_laporan_rm');
        $this->load->helper('url');
        
        if ($this->session->userdata('status') != 'login') {
            redirect('C_login');
        }
    }

    public function laporan_rm() {
        $data['judul1'] = 'Laporan';
        $data['judul2'] = 'Rekam Medis';
        $data['contents'] = 'app_poli/v_laporan_rm';
        $this->load->view('app_poli/v_template_poli', $data);
    }
    public function cari() {
        $data['judul1'] = 'Laporan';
        $data['judul2'] = 'Rekam Medis';
        $id_poli = $this->session->userdata('id_poli');
        $data['kunjungan'] = $this->M_laporan_rm->tampil($id_poli);
        $data['contents'] = 'app_poli/v_laporan_rm';
        $this->load->view('app_poli/v_template_poli', $data);
       
    }
    
    public function cetak() {
        $tgl_dari = $this->uri->segment(3);
        $tgl_sampai = $this->uri->segment(4);
        $id_poli = $this->session->userdata('id_poli');
        $data['kunjungan'] = $this->M_laporan_rm->cetak_rm($tgl_dari, $tgl_sampai, $id_poli);
        $data['tgl_dari'] = $tgl_dari;
        $data['tgl_sampai'] = $tgl_sampai;
        // $data['poli'] = $id_poli;
        $this->load->view('app_poli/v_cetak', $data);
    }
    
    public function excel() {
        header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=Laporan Rekam Medis.xls");
        $id_poli = $this->session->userdata('id_poli');
        $tgl_dari = $this->uri->segment(3);
        $tgl_sampai = $this->uri->segment(4);
        $data['kunjungan'] = $this->M_laporan_rm->cetak_rm($tgl_dari, $tgl_sampai, $id_poli);
        $data['tgl_dari'] = $tgl_dari;
        $data['tgl_sampai'] = $tgl_sampai;
        // $data['poli'] = $id_poli;
        $this->load->view('app_poli/v_excel', $data);
        // $this->load->view('C_app_poli/v_template_poli', $data);
    }
    

}
