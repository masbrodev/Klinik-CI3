<?php

class M_pasien extends CI_Model {
    
    
    public function semua_data() {
        return $this->db->order_by('nama', 'asc')
                        ->get('tb_pasien')
                        ->result();
    }
    
    public function cari() {
        $key = $this->input->post('ed_cari');
        return $this->db->like('nama', $key)
                        ->get('tb_pasien')
                        ->result();
    }
    
    public function detail($id) {
        return $this->db->where('id_pasien', $id)
                        ->get('tb_pasien')
                        ->row();
    }
    
    public function detail2($id) {
        return $this->db->query("SELECT a.*, b.nama AS kategori FROM tb_pasien a, tb_kategori b WHERE a.kelamin=b.kelamin AND a.id_pasien=$id")
                        ->row();
    }
    
    public function tambah() {
        $data = array(
            'nis_nik'        => $this->input->post('nis_nik'),
            'nama'        => $this->input->post('nama'),
            'alamat'      => $this->input->post('alamat'),
            'usia'        => $this->input->post('usia'),
            'kelamin'     => $this->input->post('kelamin'),
            'status'      => $this->input->post('status'),
            'daerah'      => $this->input->post('daerah'),
            'wilayah'      => $this->input->post('wilayah'),
            'pendidikan'      => $this->input->post('pendidikan')
        );
        $this->db->insert('tb_pasien', $data);        
    }
    
    public function edit($id) {
        $data = array(
            'nis_nik'        => $this->input->post('nis_nik'),
            'nama'        => $this->input->post('nama'),
            'alamat'      => $this->input->post('alamat'),
            'usia'        => $this->input->post('usia'),
            'kelamin'     => $this->input->post('kelamin'),
            'status'   => $this->input->post('status'),
            'daerah'      => $this->input->post('daerah'),
            'wilayah'      => $this->input->post('wilayah'),
            'pendidikan'      => $this->input->post('pendidikan')
        );
        $this->db->where('id_pasien', $id);
        $this->db->update('tb_pasien', $data);        
    }
    
    public function hapus($id) {
        $this->db->where('id_pasien', $id)
                 ->delete('tb_pasien');
    }            
    
    public function total_pasien() {
        $q = $this->db->query("SELECT COUNT(id_pasien) AS total FROM tb_pasien")->row();
        return $q->total;
    }
    
}

?>

