<?php
class Mahasiswa_model extends CI_ModeL{
    public function ambil_mahasiswa()
    {
		return $this->db->get('mahasiswa');
    }
    public function get_keyword($keyword){
      $this->db->select('*');
      $this->db->from('mahasiswa');
      $this->db->like('nama', $keyword);
      $this->db->or_like('nim', $keyword);
      $this->db->or_like('programstudi', $keyword);
      $this->db->or_like('jeniskelamin', $keyword);
      $this->db->or_like('kelas', $keyword);

      return $this->db->get()->result();
    }
}
?>