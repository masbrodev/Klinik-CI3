<?php

class M_rekammedis extends CI_Model {
    
   
    public function v_rekammedis($id_poli) {  
        return $this->db->query("SELECT a.id_pendaftaran, a.keluhan, a.jam_daftar, "
        . "b.nama AS pasien, b.alamat, b.status, b.usia, b.no_rm, b.tgl_lahir, c.diagnosa, c.tindakan, c.terapy, c.perawat, d.nama_dokter, e.nama AS poli FROM "
        . "tb_pendaftaran a, tb_pasien b, tb_rm c, tb_dokter d, tb_poli e WHERE c.id_pasien=b.id_pasien AND c.id_pendaftaran=a.id_pendaftaran AND c.id_rm=c.id_rm AND c.id_dokter=d.id_dokter AND c.id_poli=e.id_poli AND c.id_poli='$id_poli' ORDER BY c.id_rm DESC")
        ->result();
    }
  
    public function cari() {
        $key = $this->input->post('ed_cari');
        return $this->db->like('nama', $key)
                        ->get('tb_rm')
                        ->result();
    }
 
    public function tambah() {
        $id_poli = $this->session->userdata('id_poli'); 
        $data = array(
            'id_pasien' => $this->input->post('id_pasien'),
            'id_pendaftaran' => $this->input->post('id_pendaftaran'),
            'diagnosa'    => $this->input->post('diagnosa'),
            'tindakan' => $this->input->post('tindakan'),
            'terapy'    => $this->input->post('terapy'),
            'id_dokter' => $this->input->post('nama_dokter'),
            'id_poli'    => $id_poli,
            'perawat'   => $this->input->post('perawat'),
        );
        
            $this->db->insert('tb_rm', $data);
 }
    
 public function detail2() {
    return $this->db->query("SELECT a.id_pendaftaran, a.tgl_daftar, a.keluhan, a.no_antrian, a.jam_daftar, "
            . "b.nama AS pasien, b.alamat, b.status, b.usia, b.daerah, b.no_rm, b.tgl_lahir, c.nama AS poli, d.nama_dokter, e.id_rm, e.diagnosa, e.tindakan, e.terapy, e.perawat FROM "
            . "tb_pendaftaran a, tb_pasien b, tb_poli c, tb_dokter d, tb_rm e WHERE e.id_pasien=b.id_pasien AND "
            . "e.id_pendaftaran=a.id_pendaftaran AND e.id_dokter=d.id_dokter AND e.id_poli=c.id_poli ORDER BY e.id_rm DESC")
            ->row();
}

    public function hapus($id) {
        $this->db->where('no_rm', $id)
                 ->delete('tb_rm');
    } 
    
    public function grafik($tabel){
            $query=$this->db->select ('*')
                        ->from($tabel)
                        ->get('');
            return $query;
    }
    
}

?>

