<?php 
class Login_model extends CI_Model{
	public function cek_login($username, $password){
		$this->db->where("nim", $username);
		$this->db->where("password", $password);
		
		return $this->db->get('mahasiswa');
	}

	public function getLoginData($user, $pass){

		$u = $user;
		$p = md5($pass);

		$query_cekLogin = $this->db->get_where('mahasiswa', array('nim' => $u, 'password' => $p));

		if (count($query_cekLogin->resul()) >0 ) {
			foreach ($query_cekLogin->result() as $qck ) {
				foreach ($query_cekLogin->result() as $ck ) {
					$sess_data ['logged_in'] = TRUE;
					$sess_data ['username'] = $ck->username;
					$sess_data ['password'] = $ck->password;
					$sess_data ['status'] = $ck->status;
					$sess_data ['nama'] = $ck->nama;
					$sess_data ['nim'] = $ck->nim;
					$this->session->set_userdata($sess_data);
				}
				redirect('administrator/dashboard');
			}
		}else{
			$this->session->set_flashdata('pesan', 'Username dan Password Anda Salah');
			redirect('administrator/auth');
		}

	}
	
}