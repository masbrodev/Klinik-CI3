<?php

class M_dokter extends CI_Model {
    
    
    public function semua_data() {
        return $this->db->order_by('nama_dokter', 'asc')
                        ->get('tb_dokter')
                        ->result();
    }
    
    public function cari() {
        $key = $this->input->post('ed_cari');
        return $this->db->like('nama_dokter', $key)
                        ->get('tb_dokter')
                        ->result();
    }
    
    public function detail($id) {
        return $this->db->where('id_dokter', $id)
                        ->get('tb_dokter')
                        ->row();
    }
    
    public function detail2($id) {
        return $this->db->query("SELECT a.*, b.nama_dokter AS kategori FROM tb_dokter a, tb_kategori b WHERE a.kelamin=b.kelamin AND a.id_dokter=$id")
                        ->row();
    }
    
    public function tambah() {
        $data = array(
            'nama_dokter'      => $this->input->post('nama_dokter'),
            'alamat'    => $this->input->post('alamat'),
            // 'hp'        => $this->input->post('hp'),
            'spesialis'  => $this->input->post('spesialis')
        );
        $this->db->insert('tb_dokter', $data);        
    }
    
    public function edit($id) {
        $data = array(
            'nama_dokter'      => $this->input->post('nama_dokter'),
            'alamat'    => $this->input->post('alamat'),
            // 'hp'        => $this->input->post('hp'),
            'spesialis'  => $this->input->post('spesialis')
        );
        $this->db->where('id_dokter', $id);
        $this->db->update('tb_dokter', $data);
    }
    
    public function hapus($id) {
        $this->db->where('id_dokter', $id)
                 ->delete('tb_dokter');
    }            
    
    public function total_dokter() {
        $q = $this->db->query("SELECT COUNT(id_dokter) AS total FROM tb_dokter")->row();
        return $q->total;
    }
    
}

?>

