<?php

class M_daftar extends CI_Model {
    
    
    public function semua_data() {
        return $this->db->order_by('nama', 'desc')
                        ->get('tb_barang')
                        ->result();
    }
    
    public function cari() {
        $key = $this->input->post('ed_cari');
        return $this->db->like('nama', $key)
                        ->get('tb_pasien')
                        ->result();
    }
    
    public function detail($id) {
        return $this->db->where('id_barang', $id)
                        ->get('tb_barang')
                        ->row();
    }
    
    public function detail2($id) {
        return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar, a.keluhan, a.no_antrian, "
                . "b.nama AS pasien,b.no_rm, b.tgl_lahir, b.usia, b.kelamin, b.alamat, b.status,  c.nama AS poli FROM "
                . "tb_pendaftaran a, tb_pasien b, tb_poli c WHERE a.id_pasien=b.id_pasien AND "
                . "a.id_poli=c.id_poli AND a.id_pendaftaran='$id'")
                        ->row();
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

