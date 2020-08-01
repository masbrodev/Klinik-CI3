<?php

class M_poli extends CI_Model {
           
    
    public function semua_data() {
        return $this->db->order_by('nama', 'asc')
                        ->get('tb_poli')
                        ->result();
    }        
    
    public function detail($id_poli) {
        return $this->db->where('id_poli', $id_poli)
                        ->get('tb_poli')
                        ->row();
    }
    
    public function tambah() {
        $data = array(
            'nama'      => $this->input->post('nama'),
            'username'  => $this->input->post('username'),
            'password'  => $this->input->post('password')
        );
        $this->db->insert('tb_poli', $data);        
    }
    
    public function edit($id) {
        $data = array(
            'nama'      => $this->input->post('nama'),
            'username'  => $this->input->post('username'),
            'password'  => $this->input->post('password')
        );
        $this->db->where('id_poli', $id);
        $this->db->update('tb_poli', $data);
    }
    
    public function hapus($id) {
        $this->db->where('id_poli', $id)
                 ->delete('tb_poli');
    }                      
    
    function jumlah_poli() {
        return $this->db->get('tb_poli')->num_rows();
    }
    
    function ambil_poli($tabel, $id){
        $data = $this->db->get_where($tabel, $id);
        return $data;
    }
    
}

?>

