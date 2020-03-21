<?php 

class Dashboard extends CI_Controller{

	public function index(){
		$data = $this->user_model->ambil_data($this->session->userdata['nama']);
		$data = array('nama' => $data->nama,
						'nim' => $data->nim,);

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/dashboard', $data);
		$this->load->view('templates_administrator/footer');
	}
}

 ?>