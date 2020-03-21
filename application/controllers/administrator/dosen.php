<?php

class Dosen extends CI_Controller{



	public function index()
	{

		$data = $this->user_model->ambil_data($this->session->userdata['nama']) ;
		$data = array('nama'=> $data->nama, 'nim' => $data->nim,);
		$data['nilaiakademik'] = $this->dosen_model->tampil_data()->result();


		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/bimbingan',$data) ;
		$this->load->view('templates_administrator/footer') ;
}
}