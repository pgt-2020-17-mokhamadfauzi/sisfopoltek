<?php 

class Kampus extends CI_Controller{

	public function index(){
		//$data = $this->user_model->ambil_data($this->session->userdata['nama']);
		//$data = array('nama' => $data->nama,);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/kampus');
		$this->load->view('templates_administrator/footer');
	}
}

 ?>