<?php

class poin extends CI_Controller{



	public function index()
	{

		$data = $this->user_model->ambil_data($this->session->userdata['nama']) ;
		$data = array('nama'=> $data->nama, 'nim' => $data->nim,);


		$data['kondite'] = $this->kondite_model->tampil_data1($this->session->userdata['nim'])->result();


		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/kondite', $data) ;
		$this->load->view('templates_administrator/footer') ;
}
}