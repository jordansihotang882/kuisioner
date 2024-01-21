<?php 
class Responden extends CI_Controller  {

	public function index()
	{
		$data['responden'] = $this->model_suku->tampil_data('tb_responden')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/responden', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_responden()
	{
		$data['responden'] = $this->model_suku->tampil_data('tb_responden')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_responden', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_responden_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_responden();
		}else{
			$nama = $this->input->post('nama');
			$npm = $this->input->post('npm');
			$alamat = $this->input->post('alamat');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			$data = array(
			'nama'    => $nama, 
			'npm'    => $npm, 
			'alamat'    => $alamat,
			'email'    => $email, 
			'password'    => $password
		);
			$this->model_suku->insert_data($data,'tb_responden');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/responden');
		}

	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama','nama','required',['required' => 'Nama Wajib diisi']);
		$this->form_validation->set_rules('npm','npm','required',['required' => 'npm Wajib diisi']);
		$this->form_validation->set_rules('alamat','alamat','required',['required' => 'alamat Wajib diisi']);
		$this->form_validation->set_rules('email','email','required',['required' => 'email Wajib diisi']);
		$this->form_validation->set_rules('password','password','required',['required' => 'Password Wajib diisi']);
	}

	public function update($id)
	{
		$where= array('id_responden' => $id);
		$data['responden'] = $this->db->query("select * from tb_responden where id_responden='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_responden', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function update_aksi()
	{
		$id= $this->input->post('id_responden'); 
			$nama = $this->input->post('nama');
			$npm = $this->input->post('npm');
			$alamat = $this->input->post('alamat');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
		$data = array(
			'nama'    => $nama, 
			'npm'    => $npm, 
			'alamat'    => $alamat,
			'email'    => $email, 
			'password'    => $password
		);

		$where = array(
			'id_responden'    => $id 
		);
		$this->model_suku->update_data($where,$data,'tb_responden');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/responden');
	}
	public function delete ($id)
	{
		$where = array('id_responden' => $id);
		$this->model_suku->delete_data($where,'tb_responden');
		redirect('admin/responden');
	}
}

 ?>