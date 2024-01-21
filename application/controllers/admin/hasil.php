<?php 
class Hasil extends CI_Controller  {

	public function index()
	{
		$data['hasil'] = $this->model_suku->tampil_data('tb_hasil')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/hasil', $data);
		$this->load->view('templates_admin/footer');
	}
	public function print_hasil()
	{
		$data['hasil'] = $this->model_suku->tampil_data('tb_hasil')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('admin/print_hasil', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_suku()
	{
		$data['suku'] = $this->model_suku->tampil_data('tb_suku')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_suku', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_suku_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_suku();
		}else{
			$nama_suku = $this->input->post('nama_suku');
			$data = array(
			'nama_suku'    => $nama_suku, 
		);
			$this->model_suku->insert_data($data,'tb_suku');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/suku');
		}

	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama_suku','nama_suku','required',['required' => 'Nama Suku Wajib diisi']);
	}

	public function update($id)
	{
		$where= array('id_suku' => $id);
		$data['suku'] = $this->db->query("select * from tb_suku where id_suku='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_suku', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function update_aksi()
	{
		$id= $this->input->post('id_suku'); 
		$nama_suku= $this->input->post('nama_suku'); 

		$data = array(
			'nama_suku'    => $nama_suku, 
		);

		$where = array(
			'id_suku'    => $id 
		);
		$this->model_suku->update_data($where,$data,'tb_suku');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/suku');
	}
	public function delete ($id)
	{
		$where = array('id_suku' => $id);
		$this->model_suku->delete_data($where,'tb_suku');
		redirect('admin/suku');
	}
}

 ?>