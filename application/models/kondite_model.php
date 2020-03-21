<?php 

	class Kondite_model extends CI_model{
		public function tampil_data1($id)
		{
			$this->db->where("nim", $id);
			return $this->db->query("SELECT a.jenispoin, a.poin, a.keterangan, a.tahun
	FROM logkondite AS a
	WHERE nim='$id'") ;
		}


		}




 ?>