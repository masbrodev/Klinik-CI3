<?php

class M_laporan extends CI_Model {
       
    
    public function cari() {
        $tgl_dari = $this->input->post('ed_tgl_dari');
        $tgl_sampai = $this->input->post('ed_tgl_sampai');
        return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar,  a.keluhan, a.no_antrian, a.jam_daftar, "
                . "b.nama AS pasien, b.no_rm, b.alamat, b.tgl_lahir, b.usia, b.kelamin, b.daerah, b.wilayah, c.nama AS poli, d.nama AS petugas FROM "
                . "tb_pendaftaran a, tb_pasien b, tb_poli c, tb_petugas d WHERE a.id_pasien=b.id_pasien AND "
                . "a.id_poli=c.id_poli AND a.id_petugas=d.id_petugas AND (a.tgl_daftar>='$tgl_dari' AND a.tgl_daftar<='$tgl_sampai')")
                        ->result();
    }
    
    public function cetak($tgl_dari, $tgl_sampai) {
        return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar,  a.keluhan, a.no_antrian, a.jam_daftar, "
                . "b.nama AS pasien, b.no_rm, b.alamat, b.tgl_lahir, b.usia, b.kelamin, b.daerah, c.nama AS poli, d.nama AS petugas FROM "
                . "tb_pendaftaran a, tb_pasien b, tb_poli c, tb_petugas d WHERE a.id_pasien=b.id_pasien AND "
                . "a.id_poli=c.id_poli AND a.id_petugas=d.id_petugas AND (a.tgl_daftar>='$tgl_dari' AND a.tgl_daftar<='$tgl_sampai')")
                        ->result();
    }
    
}

?>

