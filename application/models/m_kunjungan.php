<?php

class M_kunjungan extends CI_Model {
    
    
    public function semua_data($tgl) {
        return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar, a.jam_daftar, a.keluhan, a.no_antrian, "
                . "b.nama AS pasien,b.no_rm, b.alamat, b.usia, b.kelamin, b.status, b.daerah, c.nama AS poli FROM "
                . "tb_pendaftaran a, tb_pasien b, tb_poli c WHERE a.id_pasien=b.id_pasien AND "
                . "a.id_poli=c.id_poli AND a.tgl_daftar='$tgl'")
                        ->result();
    }
    
    public function cari() {
        $key = $this->input->post('ed_tanggal');
        return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar, a.jam_daftar,  a.keluhan, a.no_antrian, "
                . "b.nama AS pasien, b.no_rm, b.alamat, b.usia, b.kelamin,  b.tgl_lahir, b.status, b.daerah, c.nama AS poli FROM "
                . "tb_pendaftaran a, tb_pasien b, tb_poli c WHERE a.id_pasien=b.id_pasien AND "
                . "a.id_poli=c.id_poli AND a.tgl_daftar LIKE '%$key%'")
                        ->result();
    }
    
    public function kunjungan($id_poli) {
        return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar,a.jam_daftar, a.keluhan, a.no_antrian, a.dibaca,"
                . "b.nama AS pasien, b.no_rm, b.alamat, b.usia, b.kelamin, b.tgl_lahir, b.status, b.daerah, c.nama AS poli FROM "
                . "tb_pendaftaran a, tb_pasien b, tb_poli c WHERE a.id_pasien=b.id_pasien AND "
                . "a.id_poli=c.id_poli AND a.id_poli='$id_poli' ORDER BY a.tgl_daftar DESC, a.no_antrian ASC")
                        ->result();
    }
    
    public function detail($id) {
        return $this->db->where('id_barang', $id)
                        ->get('tb_barang')
                        ->row();
    }
    
    public function detail2($id) {
        return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar, a.jam_daftar, a.keluhan, a.no_antrian, "
                . "b.nama AS pasien, b.alamat, b.id_pasien, b.no_rm, b.usia, b.kelamin,  b.tgl_lahir, b.status, b.daerah, c.nama AS poli FROM "
                . "tb_pendaftaran a, tb_pasien b, tb_poli c WHERE a.id_pasien=b.id_pasien AND "
                . "a.id_poli=c.id_poli AND a.id_pendaftaran='$id'")
                        ->row();
    }
    
    public function update_kunjungan($id) {
        $data = array(
            'dibaca'        => 'y'
        );
        $this->db->where('id_pendaftaran', $id);
        $this->db->update('tb_pendaftaran', $data);
    }
    
    public function total_kunjungan($id_poli) {
        if ($id_poli=="0") { //total kunjungan seluruh poli
            $q = $this->db->query("SELECT COUNT(id_pendaftaran) AS total FROM tb_pendaftaran")->row();
        } else { //total kunjungan per poli
            $q = $this->db->query("SELECT COUNT(id_pendaftaran) AS total FROM tb_pendaftaran WHERE "
                . "id_poli='$id_poli'")->row();
        }        
        return $q->total;
    }
    
    public function kunjungan_hari_ini($id_poli, $tgl_skg) {
        if ($id_poli=="0") { //total kunjungan seluruh poli
            $q = $this->db->query("SELECT COUNT(id_pendaftaran) AS total FROM tb_pendaftaran WHERE "
                . "tgl_daftar='$tgl_skg'")->row();
        } else { //total kunjungan per poli
            $q = $this->db->query("SELECT COUNT(id_pendaftaran) AS total FROM tb_pendaftaran WHERE "
                . "tgl_daftar='$tgl_skg' AND id_poli='$id_poli'")->row();
        }        
        return $q->total;
    }
    
    public function belum_dilihat($id_poli) {
        $q = $this->db->query("SELECT COUNT(id_pendaftaran) AS total FROM tb_pendaftaran WHERE "
                . "id_poli='$id_poli' AND dibaca='t'")->row();
        return $q->total;
    }
    
    public function get_no_antri($id_poli, $tgl_skg) {
        $q = $this->db->query("SELECT COUNT(no_antrian) AS no_antri FROM tb_pendaftaran WHERE "
                . "tgl_daftar='$tgl_skg'AND id_poli='$id_poli'")->row();
        $no_antri = $q->no_antri + 1;
        return $no_antri;
    }
    
    public function get_id_max() {
        $q = $this->db->query("SELECT MAX(id_pendaftaran) AS max FROM tb_pendaftaran")->row();
        return $q->max + 1;
    }
    
    public function tambah($data) {
//        $jam_skg = date("H:i:s");	
//	$tgl_skg = date("Y-m-d");
//        $id_pasien = $this->input->post('id_pasien');
//        $id_poli = $this->input->post('id_poli');        
//        $cari2 = 
//        $no_antrian = $cari->nomor + 1;
//        $id_max = $cari2->id_max + 1;
        
//        $data = array(
//            'id_pendaftaran' => $id_max,
//            'tgl_daftar' => $tgl_skg,
//            'jam_daftar' => $jam_skg,
//            'id_pasien'  => $id_pasien,
//            'keluhan'    => $this->input->post('keluhan'),
//            'no_antrian' => $no_antrian,
//            'id_poli'    => $id_poli,
//            'id_petugas' => $this->session->userdata('id_petugas')
//        );
        $this->db->insert('tb_pendaftaran', $data);
        
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function cek($id_poli) {
        $q = $this->db->query("SELECT COUNT(id_pendaftaran) AS jumlah FROM tb_pendaftaran WHERE id_poli='$id_poli' AND dibaca='t'")
                      ->row();
        $jml = $q->jumlah;
        return $jml;
    }
    
    public function edit($id) {
        $data = array(
            'nama'        => $this->input->post('nama'),
            'harga'       => $this->input->post('harga'),
            'stok'        => $this->input->post('stok'),
            'id_kategori' => $this->input->post('id_kategori')
        );
        $this->db->where('id_barang', $id);
        $this->db->update('tb_barang', $data);        
    }
    
    public function hapus($id) {
        $this->db->where('id_barang', $id)
                 ->delete('tb_barang');
    }
    
    
}

?>

