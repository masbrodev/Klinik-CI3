<?php

class M_laporan_rm extends CI_Model {
       
    public function semua_data() {
        $tgl_dari = $this->input->post('ed_tgl_dari');
        $tgl_sampai = $this->input->post('ed_tgl_sampai');
        return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar, a.jam_daftar, a.keluhan, a.no_antrian, "
                . "b.nama AS pasien, b.alamat, b.usia, b.kelamin, b.status, b.no_rm, b.tgl_lahir, c.nama AS poli, d.nama_dokter, e.diagnosa, e.tindakan, e.terapy, e.perawat FROM "
                . "tb_pendaftaran a, tb_pasien b, tb_poli c, tb_dokter d, tb_rm e WHERE e.id_pasien=b.id_pasien AND "
                . "e.id_poli=c.id_poli AND e.id_poli=c.id_poli AND e.id_pendaftaran=a.id_pendaftaran AND e.id_dokter=d.id_dokter AND (a.tgl_daftar>='$tgl_dari' AND a.tgl_daftar<='$tgl_sampai')")
                        ->result();
    }

    public function tampil($id_poli) {
        $tgl_dari = $this->input->post('ed_tgl_dari');
        $tgl_sampai = $this->input->post('ed_tgl_sampai');
        return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar, a.keluhan, "
                . "b.nama AS pasien, b.alamat, b.status, b.no_rm, b.tgl_lahir, c.nama AS poli, d.nama_dokter, e.diagnosa, e.tindakan, e.terapy, e.perawat FROM "
                . "tb_pendaftaran a, tb_pasien b, tb_poli c, tb_dokter d, tb_rm e WHERE e.id_pasien=b.id_pasien AND e.id_poli='$id_poli' AND e.id_poli=c.id_poli AND e.id_pendaftaran=a.id_pendaftaran AND e.id_dokter=d.id_dokter AND e.id_rm=e.id_rm AND (a.tgl_daftar>='$tgl_dari' AND a.tgl_daftar<='$tgl_sampai') ORDER BY e.id_rm DESC")
                        ->result();
    }
    
    public function cetak_rm($tgl_dari, $tgl_sampai, $id_poli) {
        return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar, a.keluhan, "
        . "b.nama AS pasien, b.alamat, b.status, b.no_rm, b.tgl_lahir, c.nama AS poli, d.nama_dokter, e.diagnosa, e.tindakan, e.terapy, e.perawat FROM "
        . "tb_pendaftaran a, tb_pasien b, tb_poli c, tb_dokter d, tb_rm e WHERE e.id_pasien=b.id_pasien AND e.id_poli='$id_poli' AND e.id_poli=c.id_poli AND e.id_pendaftaran=a.id_pendaftaran AND e.id_dokter=d.id_dokter AND e.id_rm=e.id_rm AND (a.tgl_daftar>='$tgl_dari' AND a.tgl_daftar<='$tgl_sampai') ORDER BY e.id_rm DESC")
                ->result();
    
    }
}

?>