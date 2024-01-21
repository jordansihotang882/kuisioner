<?php 
class Kuisioner extends CI_Controller  {

	public function index()
	{
		$data['kuisioner'] = $this->model_admin->tampil_data('tb_kuisioner')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/kuisioner', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_kuisioner()
	{
		$data['kuisioner'] = $this->model_admin->tampil_data('tb_kuisioner')->result();
	    $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_input_kuisioner', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_kuisioner_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_admin();
		}else{
			$kuisioner = $this->input->post('kuisioner');
			$jumlah_responden = $this->input->post('jumlah_responden');
			
			$data = array(
			'kuisioner'    => $kuisioner, 
			'jumlah_responden'      => $jumlah_responden
		);
			$this->model_admin->insert_data($data,'tb_kuisioner');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/kuisioner');
		}

	}
	public function _rules()
	{
		$this->form_validation->set_rules('kuisioner','kuisioner','required',['required' => 'Kuisioner Wajib diisi']);
		$this->form_validation->set_rules('jumlah_responden','jumlah_responden','required',['required' => 'Jumlah Responden Wajib diisi']);
	}

	public function update($id)
	{
		$where= array('id_kuisioner' => $id);
		$data['kuisioner'] = $this->db->query("select * from tb_kuisioner where id_kuisioner='$id'")->result();
		  $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_kuisioner', $data);
		$this->load->view('templates_admin/footer');
	

	}
		public function update_aksi()
		{
		$id= $this->input->post('id_kuisioner'); 
		$kuisioner= $this->input->post('kuisioner'); 
		$jumlah_responden= $this->input->post('jumlah_responden'); 

		$data = array(
			'kuisioner'    => $kuisioner,
			'jumlah_responden'    => $jumlah_responden,
		);

		$where = array(
			'id_kuisioner'    => $id 
		);
		$this->model_admin->update_data($where,$data,'tb_kuisioner');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/kuisioner');
	}
	public function delete ($id)
	{
		$where = array('id_kuisioner' => $id);
		$this->model_admin->delete_data($where,'tb_kuisioner');
		redirect('admin/kuisioner');
	}

}

 ?>