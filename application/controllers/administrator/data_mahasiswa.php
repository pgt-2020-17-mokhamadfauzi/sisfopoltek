<?php
class Data_mahasiswa extends CI_Controller{
    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswa_model->
        ambil_mahasiswa()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/data_mahasiswa', $data);
        $this->load->view('templates_administrator/footer');
    }
    public function search(){
        $keyword = $this->input->post('keyword');
       // $data['cariberdasarkan'] = $this->input->post("cariberdasarkan");
       // $data['yangdicari'] = $this->input->post("yangdicari");
        $data['mahasiswa'] = $this->mahasiswa_model->get_keyword($keyword);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/data_mahasiswa', $data);
        $this->load->view('templates_administrator/footer');
       // $data['jumlah'] = count($data['mahasiswa']);
      //  $this->load->view("administrator/data_mahasiswa",$data);
    }
}
?>