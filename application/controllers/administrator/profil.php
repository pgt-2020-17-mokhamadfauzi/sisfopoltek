<?php 
class Profil extends CI_Controller{
	public function index()
	{
		$data = $this->user_model->ambil_data($this->session->userdata['nama']);
		$data = array(
            'nama' => $data->nama,
            'kelas' => $data->kelas,
            'nim' => $data->nim,
            'programstudi' => $data->programstudi,
            'tempatlahir' => $data->tempatlahir,
            'tanggallahir' => $data->tanggallahir,
            'tahunmasuk' => $data->tahunmasuk,
            'pembimbing' => $data->pembimbing,
        );
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/mahasiswa', $data);
		$this->load->view('templates_administrator/footer');
	}
}