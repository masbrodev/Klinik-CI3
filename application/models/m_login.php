<?php

class M_login extends CI_Model {
           
    
    public function login() {
        $data = array(
            'username' => $this->input->post('username'), 
            'password' => $this->input->post('password')
        );
        return $this->db->get_where('tb_petugas', $data);        
    }           
    
    public function login_poli() {
        $data = array(
            'username' => $this->input->post('username'), 
            'password' => $this->input->post('password')
        );
        return $this->db->get_where('tb_poli', $data);
    }
    
}

?>

