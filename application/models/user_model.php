<?php 
class User_model extends CI_Model{
	public function ambil_data($id)
	{ 
		$this->db->where("nama", $id);
		return $this->db->get('mahasiswa')->row();
	}
}