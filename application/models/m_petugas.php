<?php

class M_petugas extends CI_Model {
    
    
    public function semua_data() {
        return $this->db->order_by('nama', 'asc')
                        ->get('tb_petugas')
                        ->result();
    }
    
    public function cari() {
        $key = $this->input->post('ed_cari');
        return $this->db->like('nama', $key)
                        ->get('tb_petugas')
                        ->result();
    }
    
    public function detail($id) {
        return $this->db->where('id_petugas', $id)
                        ->get('tb_petugas')
                        ->row();
    }
    
    public function detail2($id) {
        return $this->db->query("SELECT a.*, b.nama AS kategori FROM tb_petugas a, tb_kategori b WHERE a.kelamin=b.kelamin AND a.id_petugas=$id")
                        ->row();
    }
    
    public function tambah() {
        $data = array(
            'nama'      => $this->input->post('nama'),
            'alamat'    => $this->input->post('alamat'),
            'hp'        => $this->input->post('hp'),
            'username'  => $this->input->post('username'),
            'password'  => $this->input->post('password')
        );
        $this->db->insert('tb_petugas', $data);        
    }
    
    public function edit($id) {
        $data = array(
            'nama'      => $this->input->post('nama'),
            'alamat'    => $this->input->post('alamat'),
            'hp'        => $this->input->post('hp'),
            'username'  => $this->input->post('username'),
            'password'  => $this->input->post('password')
        );
        $this->db->where('id_petugas', $id);
        $this->db->update('tb_petugas', $data);
    }
    
    public function hapus($id) {
        $this->db->where('id_petugas', $id)
                 ->delete('tb_petugas');
    }            
    
    public function total_petugas() {
        $q = $this->db->query("SELECT COUNT(id_petugas) AS total FROM tb_petugas")->row();
        return $q->total;
    }
    
}

?>

