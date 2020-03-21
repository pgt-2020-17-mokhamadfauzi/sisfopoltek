<?php 
class Ubahprofil extends CI_Controller{
	public function index()
	{
		$ses = $this->session->userdata['nim'];
		$data['profil'] = $this->profil_model->edit_data('mahasiswa' , $ses)->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/ubahprofil', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi()
	{
		$id = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$programstudi = $this->input->post('programstudi');
		$tempatlahir = $this->input->post('tempatlahir');
		$tanggallahir = $this->input->post('tanggallahir');
		$tahunmasuk = $this->input->post('tahunmasuk');
		$kelas = $this->input->post('kelas');

		$data = array(
				'nama' => $nama,
				'programstudi' => $programstudi,
				'tempatlahir' => $tempatlahir,
				'tanggallahir' => $tanggallahir,
				'tahunmasuk' => $tahunmasuk,
				'kelas' => $kelas,

				);

		$where = array(
				'nim' => $id
					);
		$this->profil_model->update_data($where, $data, 'mahasiswa');
		redirect('administrator/auth/logout');
	}

}
