<?php 
class Pertanyaan extends CI_Controller  {

	public function index()
	{
		$data['pertanyaan'] = $this->db->query("SELECT * FROM tb_pertanyaan py, tb_kuisioner ks WHERE  ks.id_kuisioner=py.id_kuisioner ORDER BY py.pertanyaan ASC")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pertanyaan', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_pertanyaan()
	{
		$data['kuisioner'] = $this->model_admin->tampil_data('tb_kuisioner')->result();
		$data['pertanyaan'] = $this->db->query("SELECT * FROM tb_pertanyaan py, tb_kuisioner ks WHERE  py.id_kuisioner=ks.id_kuisioner")->result();
	    $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_pertanyaan', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_pertanyaan_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_pertanyaan();
		}else{
			$id_kuisioner = $this->input->post('id_kuisioner');
			$pertanyaan = $this->input->post('pertanyaan');
			$data = array(
			'id_kuisioner'    => $id_kuisioner, 
			'pertanyaan'      => $pertanyaan
		);
			$this->model_admin->insert_data($data,'tb_pertanyaan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/pertanyaan');
		} 

	}
	public function _rules()
	{
		$this->form_validation->set_rules('pertanyaan','pertanyaan','required',['required' => 'Pertanyaan Wajib diisi']);
	}

	public function update($id)
	{
		$where= array('id_pertanyaan' => $id);
		$data['pertanyaan'] = $this->db->query("select * from tb_pertanyaan where id_pertanyaan='$id'")->result();
		  $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_pertanyaan', $data);
		$this->load->view('templates_admin/footer');
	

	}
		public function update_aksi()
		{
		$id= $this->input->post('id_pertanyaan'); 
		$id_kuisioner= $this->input->post('id_kuisioner'); 
		$pertanyaan= $this->input->post('pertanyaan');  

		$data = array(
			'id_kuisioner'    => $id_kuisioner,
			'pertanyaan'    => $pertanyaan, 
		);

		$where = array(
			'id_pertanyaan'    => $id 
		);
		$this->model_admin->update_data($where,$data,'tb_pertanyaan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/pertanyaan');
	}

	public function detail($id_pertanyaan)
	{
		$data['pertanyaan'] = $this->model_pertanyaan->detail_pertanyaan($id_pertanyaan);
		$data['pertanyaan'] = $this->db->query("SELECT * FROM tb_pertanyaan py, tb_kuisioner ks WHERE  py.id_kuisioner=ks.id_kuisioner")->result();
		 $data['pilihan'] = $this->db->query("SELECT * FROM tb_pilihan py, tb_pertanyaan ks WHERE  py.id_pertanyaan=ks.id_pertanyaan")->result();
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_pertanyaan',$data);
		$this->load->view('templates_admin/footer');
	}

public function pilihan()
	{
		$data['pilihan'] = $this->db->query("SELECT * FROM tb_pertanyaan py, tb_pilihan ks WHERE  ks.id_pertanyaan=py.id_pertanyaan")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pilihan', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_pilihan()
	{
		
		$data['pertanyaan'] = $this->model_admin->tampil_data('tb_pertanyaan')->result();
		$data['pilihan'] = $this->db->query("SELECT * FROM tb_pilihan py, tb_pertanyaan ks")->result();
	    $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_pilihan',$data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_pilihan_aksi()
	{
		
			$id_pertanyaan = $this->input->post('id_pertanyaan');
			$pilihan1 = $this->input->post('pilihan1');
			$pilihan2 = $this->input->post('pilihan2');
			$data = array(
			'id_pertanyaan'    => $id_pertanyaan, 
			'pilihan1'      => $pilihan1,
			'pilihan2'      => $pilihan2
		);
			$this->model_admin->insert_data($data,'tb_pilihan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/pertanyaan/pilihan');
		}

public function update_pilihan($id)
	{
		$where= array('id_pilihan' => $id);
		$data['pilihan'] = $this->db->query("select * from tb_pilihan where id_pilihan='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_pilihan', $data);
		$this->load->view('templates_admin/footer');
	

	}
		public function update_pilihan_aksi()
		{
		$id= $this->input->post('id_pilihan'); 
		$pilihan1= $this->input->post('pilihan1'); 
		$pilihan2= $this->input->post('pilihan2');  

		$data = array(
			
			'pilihan1'    => $pilihan1, 
			'pilihan2'    => $pilihan2
		);

		$where = array(
			'id_pilihan'    => $id 
		);
		$this->model_admin->update_data($where,$data,'tb_pilihan');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/pertanyaan/pilihan');
	}
	public function delete ($id)
	{
		$where = array('id_pertanyaan' => $id);
		$this->model_admin->delete_data($where,'tb_pertanyaan');
		redirect('admin/pertanyaan');
	}

}

 ?>