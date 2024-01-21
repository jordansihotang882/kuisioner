<?php 
class Auth_responden extends CI_Controller {

	public function login()
	{
		$this->form_validation->set_rules('npm','npm','required',['required' => 'Npm wajib diisi!']);
		$this->form_validation->set_rules('password','password','required',['required' => 'Password wajib diisi!']);
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('templates_admin/header');
		$this->load->view('form_login');
		$this->load->view('templates_admin/footer');

		}else{
			$auth = $this->model_auth_pelanggan->cek_login();
			if($auth == FALSE ) 
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Username atau Password Anda Salah!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
				redirect('auth_responden/login');

			}else{
				$this->session->set_userdata('npm',$auth->npm);
				$this->session->set_userdata('id_responden',$auth->id_responden);

				redirect('dashboard');
			} 
		}
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth_responden/login');
	}
}

 ?>