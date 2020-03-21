<?php
class Evaluasi extends CI_Controller{
    public function index()
    {
       $data['datadosen'] = $this->evaluasi_model->
       ambil_dosen()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen', $data);
        $this->load->view('templates_administrator/footer');
    }
    public function search(){
        $nama = $this->input->post('nama');
        // $data['cariberdasarkan'] = $this->input->post("cariberdasarkan");
        // $data['yangdicari'] = $this->input->post("yangdicari");
         $data['datadosen'] = $this->evaluasi_model->get_name($nama);
         $this->load->view('templates_administrator/header');
         $this->load->view('templates_administrator/sidebar');
         $this->load->view('administrator/data_mahasiswa', $data);
         $this->load->view('templates_administrator/footer');
        // $data['jumlah'] = count($data['mahasiswa']);
       //  $this->load->view("administrator/data_mahasiswa",$data);
    }
}
?>