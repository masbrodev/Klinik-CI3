<?php

class C_daftar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_daftar');
        $this->load->model('M_pasien');
        $this->load->model('M_poli');
        $this->load->helper('url');
        
        if ($this->session->userdata('status') != 'login') { 
            redirect('C_login');
        }
    }

    public function index() {
        $data['judul1'] = 'Pendaftaran';
        $data['judul2'] = '';
        $data['contents'] = 'daftar/v_cari';
        $this->load->view('v_template', $data);
    }
    
    public function cari() {
        $data['judul1'] = 'Pendaftaran';
        $data['judul2'] = 'Hasil Pencarian';
        $data['hasil_cari'] = $this->M_daftar->cari();
        $data['contents'] = 'daftar/v_cari';
        $this->load->view('v_template', $data);
        
    }    
    
    public function daftar($id) {
        $data['judul1'] = 'Pendaftaran';
        $data['judul2'] = 'Form Pendaftaran';
        $data['pasien'] = $this->M_pasien->detail($id);
        $data['poli']   = $this->M_poli->semua_data();
        $data['contents'] = 'daftar/v_daftar';
        $this->load->view('v_template', $data);
    }
    
    public function simpan_pendaftaran () {        
        $id_max = $this->M_daftar->get_id_max();
	    $tgl_skg = date("Y-m-d");
	    $jam_daftar = date("H:i:s");
        $id_pasien = $this->input->post('id_pasien');
        $id_poli = $this->input->post('id_poli');        
        $no_antrian = $this->M_daftar->get_no_antri($id_poli, $tgl_skg);        
        
        $data = array(
            'id_pendaftaran' => $id_max,
            'tgl_daftar' => $tgl_skg,
            'jam_daftar' => $jam_daftar,
            'id_pasien'  => $id_pasien,
            'keluhan'    => $this->input->post('keluhan'),
            'no_antrian' => $no_antrian,
            'id_poli'    => $id_poli,
            'id_petugas' => $this->session->userdata('id_petugas')
        );
        
        if ($this->input->post('bt_simpan')) {
            if ($this->M_daftar->tambah($data)==TRUE) {                
                redirect('C_daftar/detail/'.$id_max);
            }            
        }
    }
    
    public function detail() {
        $data['judul1'] = 'Pendaftaran';
        $data['judul2'] = 'Detail Pendaftaran';
        $data['contents'] = 'daftar/v_detail';
        $id = $this->uri->segment(3);
        $data['pasien'] = $this->M_daftar->detail2($id);
        $this->load->view('v_template', $data);

        // print_r ($data['pasien']);
    }
    
    public function cetak() {
        $id = $this->uri->segment(3);
        $data['pasien'] = $this->M_daftar->detail2($id);
        $this->load->view('v_cetak', $data);
    }
    
    public function daftar_list () {
        
    }


    public function detailsfsdf() {
//       $data['barang'] = $this->m_barang->detail2($id);
        $data['judul1'] = 'Pendaftaran';
        $data['judul2'] = 'Detail Pendaftaran';
        $data['contents'] = 'daftar/v_detail';
        $this->load->view('v_template', $data);
    }

    public function tambah() {
        if ($this->input->post('bt_simpan')) {
            $this->M_barang->tambah();
            redirect('C_barang');
        } else {
            $data['kategori'] = $this->M_kategori->semua_data();
            $data['contents'] = 'barang/v_tambah';
            $this->load->view('v_template', $data);
        }        
    }
    

    public function edit($id) {
        if ($this->input->post('bt_simpan')) {
            $this->M_barang->edit($id);
            $data['contents'] = 'barang/v_edit';
            $this->load->view('v_template', $data);
            redirect('C_barang');
        } else {
            $data['barang'] = $this->M_barang->detail($id);
            $data['kategori'] = $this->M_kategori->semua_data();
            $data['contents'] = 'barang/v_edit';
            $this->load->view('v_template', $data); //template pada folder view
        }        
    }

    public function hapus($id) {
        $this->M_barang->hapus_barang($id);
        $this->session->set_flashdata('k', 'hapus_berhasil');
        redirect('C_barang');
    }

}
