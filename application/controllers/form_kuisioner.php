<?php 	
class form_kuisioner extends CI_Controller{
public function index()
 
	{
		$this->_rules();
		if($this->form_validation->run()== FALSE) {
			$data['pertanyaan'] = $this->db->query("SELECT * FROM tb_pilihan py, tb_pertanyaan ks WHERE  py.id_pertanyaan=ks.id_pertanyaan")->result();
        $data['pilihan'] = $this->model_admin->tampil_data('tb_pilihan')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates/sidebar');
		$this->load->view('register_form', $data);
		$this->load->view('templates_admin/footer');
	}else{
		    $nama     = $this->input->post('nama');
			$status      = $this->input->post('status');
			$jawaban1   = $this->input->post('alamat');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
		

		$data = array(
			'nama'    => $nama, 
			'npm'    => $npm, 
			'alamat'    => $alamat,
			'email'    => $email, 
			'password'    => $password
		);
			$this->model_tagihan->insert_data($data,'tb_pelanggan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Anda Berhasil Mendaftar!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('auth_responden/login');
	}
}

	public function _rules()
	{
		$this->form_validation->set_rules('nama','nama','required',['required' => 'Nama  Wajib diisi']);
		$this->form_validation->set_rules('npm','npm','required',['required' => 'Npm Wajib diisi']);
		$this->form_validation->set_rules('password','password','required',['required' => 'Password Wajib diisi']);
	}
}




	
 ?>
