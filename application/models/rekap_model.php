<?php  

class Rekap_model extends CI_Model{
	public function tampil_data($id)
	{
		$this->db->where("nim", $id);
		return $this->db->query("SELECT a.akhir, a.tahunakademik, a.nama, a.uts, a.uas, a.tugas, a.kuis, a.akhir, a.kodemk, a.namamk, a.sks, a.huruf
FROM nilaiakademik AS a
WHERE a.angka LIKE 1 AND nim='$id'");
	}

	public function tampil_data1($id)
	{
		$this->db->where("nim", $id);
		return $this->db->query("SELECT a.akhir, a.tahunakademik, a.nama, a.uts, a.uas, a.tugas, a.kuis, a.akhir, a.kodemk, a.namamk, a.sks, a.huruf
FROM nilaiakademik AS a
WHERE a.angka LIKE 2 AND nim='$id'");
	}

	public function tampil_data2($id)
	{
		$this->db->where("nim", $id);
		return $this->db->query("SELECT a.akhir, a.tahunakademik, a.nama, a.uts, a.uas, a.tugas, a.kuis, a.akhir, a.kodemk, a.namamk, a.sks, a.huruf
FROM nilaiakademik AS a
WHERE a.angka LIKE 3 AND nim='$id'");
	}

	public function tampil_data3($id)
	{
		$this->db->where("nim", $id);
		return $this->db->query("SELECT a.akhir, a.tahunakademik, a.nama, a.uts, a.uas, a.tugas, a.kuis, a.akhir, a.kodemk, a.namamk, a.sks, a.huruf
FROM nilaiakademik AS a
WHERE a.angka LIKE 4 AND nim='$id'");
	}

	public function tampil_data4($id)
	{
		$this->db->where("nim", $id);
		return $this->db->query("SELECT a.akhir, a.tahunakademik, a.nama, a.uts, a.uas, a.tugas, a.kuis, a.akhir, a.kodemk, a.namamk, a.sks, a.huruf
FROM nilaiakademik AS a
WHERE a.angka LIKE 5 AND nim='$id'");
	}

	public function tampil_data5($id)
	{
		$this->db->where("nim", $id);
		return $this->db->query("SELECT a.akhir, a.tahunakademik, a.nama, a.uts, a.uas, a.tugas, a.kuis, a.akhir, a.kodemk, a.namamk, a.sks, a.huruf
FROM nilaiakademik AS a
WHERE a.angka LIKE 6 AND nim='$id'");
	}


}
