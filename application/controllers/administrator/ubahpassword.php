<?php 
class Ubahpassword extends CI_Controller{
	public function index()
	{
		$ses = $this->session->userdata['nim'];
		$data['pass'] = $this->ubahpass_model->edit_data('mahasiswa' , $ses)->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/Ubahpassword', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi()
	{
		$data['mahasiswa'] = $this->db->get_where('mahasiswa' , ['nim' => $this->session->userdata('nim')])->row_array();
		
		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

		if ($this->form_validation->run() == false) {
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/Ubahpassword', $data);
		$this->load->view('templates_administrator/footer');
		}else{
			$current_password = $this->input->post('current_password');
			$current_passwordmd5 = md5($current_password);
			$password_verif = md5($current_passwordmd5);
			$new_password1 = $this->input->post('new_password1');
			$new_password2 = $this->input->post('new_password2');
			if (!$data['mahasiswa']['password'] == $password_verif) {
				$this->session->set_flashdata('pesan', 'Sorry Wrong Current Password!');
					redirect('administrator/ubahpassword/update_aksi');
			}else{
				if ($new_password1 == $current_password) {
					$this->session->set_flashdata('pesan', 'Sorry New Password Must Be Different With Current Password!');
					redirect('administrator/ubahpassword/update_aksi');
				}else{
					$password_md5 = md5($new_password1);
					$this->db->set('password', $password_md5);
					$this->db->where('nim', $this->session->userdata['nim']);
					$this->db->update('mahasiswa');

					$this->session->set_flashdata('pesan', 'Password Changed!');
					redirect('administrator/ubahpassword/update_aksi');
				}
			}
		}

	}

}

 