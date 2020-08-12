<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_app_poli extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_kunjungan');
        $this->load->model('M_dokter');
        $this->load->model('M_rekammedis');
        $this->load->helper('url');

        if ($this->session->userdata('status') != 'login') {
            redirect('C_login/login_poli');
        }
    }

    public function index() {
        $tgl_skg = date("Y-m-d");
        $id_poli = $this->session->userdata('id_poli');
        $data['judul1'] = 'Beranda';
        $data['judul2'] = '';
        $data['total_kunjungan'] = $this->M_kunjungan->total_kunjungan($id_poli);
        $data['kunjungan_hari_ini'] = $this->M_kunjungan->kunjungan_hari_ini($id_poli, $tgl_skg);
        $data['belum_dilihat'] = $this->M_kunjungan->belum_dilihat($id_poli);
        $data['contents'] = 'app_poli/v_dashboard_poli';
        $this->load->view('app_poli/v_template_poli', $data);
    }
    
    public function cek_notif() {
        $id_poli = $this->session->userdata('id_poli');
        $jumlah = $this->M_kunjungan->cek($id_poli);
        if ($jumlah > 0) {
            echo json_encode($jumlah);
        } else {
            echo json_encode("");
        }
    }

    public function kunjungan() {
        $id_poli = $this->session->userdata('id_poli');
        $data['judul1'] = 'Kunjungan';
        $data['judul2'] = 'Pasien';
        $data['kunjungan'] = $this->M_kunjungan->kunjungan($id_poli);
        $data['contents'] = 'app_poli/v_kunjungan';
        $this->load->view('app_poli/v_template_poli', $data);
        // print_r($id_poli);
    }
    
    public function detail_kunjungan() {
        $data['judul1'] = 'Kunjungan';
        $data['judul2'] = 'Detail';
        $data['contents'] = 'app_poli/v_detail_kunjungan';
        $id = $this->uri->segment(3);
        $id_poli = $this->session->userdata('id_poli');
        $data['dokter'] = $this->M_dokter->semua_data($id);
        $data['pasien'] = $this->M_kunjungan->detail2($id, $id_poli);
        $this->M_kunjungan->update_kunjungan($id);
        $this->load->view('app_poli/v_template_poli', $data);
    // print_r($data['pasien']);
    }

   public function simpan_rm(){

    if ($this->input->post('bt_simpan')) {
        $this->M_rekammedis->tambah();             
            redirect('C_app_poli/v_rekammedis/');
           
    }  
}
    public function v_rekammedis() {
        $id_poli = $this->session->userdata('id_poli');
        $data['judul1'] = 'Rekam Medis';
        $data['judul2'] = 'Detail Rekam Medis';
        $data['j'] = $this->M_rekammedis->v_rekammedis($id_poli);
        $data['contents'] = 'app_poli/v_rekammedis';
        $this->load->view('app_poli/v_template_poli', $data);
        //  print_r($data['j']);
    }

    public function cetak() {
        // $id = $this->uri->segment(3);
        $data['c'] = $this->M_rekammedis->detail2();
        $this->load->view('app_poli/v_cetak_obat', $data);
        //    print_r($data['c']);
    }

   
    public function hapus($id) {
        $this->M_rekammedis->hapus($id);
        $this->session->set_flashdata('b', 'hapus_berhasil');
        redirect('C_app_poli/v_rekammedis');
    }


    public function logout() {
        $this->session->sess_destroy();
        header('location:'.base_url().'C_app_poli');
    }

    public function grafik(){
        
    }

}
