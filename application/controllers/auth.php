<?php 

class Auth extends CI_Controller{

	public function index()
	{
		$this->load->view('templates_administrator/header');
		$this->load->view('administrator/login');
		$this->load->view('templates_administrator/footer');
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE) {
		$this->load->view('templates_administrator/header');
		$this->load->view('administrator/login');
		$this->load->view('templates_administrator/footer');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $username;
			$pass = md5($password);

			$cek = $this->login_model->cek_login($user, $pass);

			if ($cek->num_rows() >0) {
				foreach ($cek->result() as $ck ) {
					$sess_data['username'] = $ck->username;
					$sess_data['status'] = $ck->status;
					$sess_data['nama'] = $ck->nama;
					$sess_data['nim'] = $ck->nim;

					$this->session->set_userdata($sess_data);
				}
				if ($sess_data['status'] == 'aktif') {
					redirect('administrator/dashboard');

				}else{
					$this->session->set_flashdata('pesan', 'Maaf Anda di Blok');
					redirect('auth');
				}
				
				
			}else{
				$this->session->set_flashdata('pesan', 'Maaf Username atau Password Salah');
					redirect('auth');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}