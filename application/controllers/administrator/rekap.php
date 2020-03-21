<?php 

class Rekap extends CI_Controller{
	public function index(){
		$data = $this->user_model->ambil_data($this->session->userdata['nama']);
		$data = array('nama' => $data->nama,
						'nim' => $data->nim,);
		
		$data['nilaiakademik'] = $this->rekap_model->tampil_data($this->session->userdata['nim'])->result();
		$data['nilaiakademik1'] = $this->rekap_model->tampil_data1($this->session->userdata['nim'])->result();
		$data['nilaiakademik2'] = $this->rekap_model->tampil_data2($this->session->userdata['nim'])->result();
		$data['nilaiakademik3'] = $this->rekap_model->tampil_data3($this->session->userdata['nim'])->result();
		$data['nilaiakademik4'] = $this->rekap_model->tampil_data4($this->session->userdata['nim'])->result();
		$data['nilaiakademik5'] = $this->rekap_model->tampil_data5($this->session->userdata['nim'])->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/nilai', $data);
		$this->load->view('templates_administrator/footer');
	}
}