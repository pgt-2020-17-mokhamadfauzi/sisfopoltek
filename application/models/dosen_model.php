<?php 

class Dosen_model extends CI_model{
	public function tampil_data()
	{
		return $this->db->get('nilaiakademik');
	}
 }