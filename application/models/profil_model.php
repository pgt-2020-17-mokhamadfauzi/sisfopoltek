<?php 
class Profil_model extends CI_Model{
	public function edit_data($table, $id)
	{
		$this->db->where("nim", $id);
		return $this->db->get_where($table);

	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}