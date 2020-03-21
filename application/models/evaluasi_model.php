<?php
class Evaluasi_model extends CI_ModeL{
    public function ambil_dosen(){
        return $this->db->get('datadosen');
    }
    public function get_name($nama){
        $this->db->select('*');
        $this->db->from('datadosen');
        $this->db->like('nama', $nama);
        return $this->db->get()->result();
    }
}
?>