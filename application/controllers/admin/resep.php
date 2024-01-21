<?php 
class Resep extends CI_Controller  {

	public function index()
	{
		$data['resep'] = $this->model_suku->tampil_data('tb_resep')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/resep', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_resep()
	{
		$data['resep'] = $this->model_resep->tampil_data('tb_resep')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_resep', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_resep_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_resep();
		}else{
			$suku = $this->input->post('suku');
			$nama_resep = $this->input->post('nama_resep');
			$cara_buat = $this->input->post('cara_buat');
			$alat = $this->input->post('alat');
			$bahan = $this->input->post('bahan');
			$keterangan = $this->input->post('keterangan');
			$foto = $_FILES['foto']['name'];
			$video = $_FILES['video']['name'];
			if ($foto='' or $video=''){}else{
				$config['upload_path'] = './uploads';
				$config['allowed_types'] ='jpg|jpeg|png|gif|mp4';
				$config['max_size']             = 100000;
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){

				}else{
					$foto=$this->upload->data('file_name');
				
				}
				if ($video='' or $video=''){}else{
				$config['upload_path'] = './uploads';
				$config['allowed_types'] ='jpg|jpeg|png|gif|mp4';
				$config['max_size']             = 100000;
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('video')){

				}else{
					$video=$this->upload->data('file_name');
					
			}
			}
		}
			
			$data = array(
			'suku'    => $suku, 
			'nama_resep'    => $nama_resep,
			'cara_buat'    => $cara_buat,
			'alat'    => $alat,
			'bahan'    => $bahan,
			'keterangan'    => $keterangan,
			'foto'    => $foto,
			'video'    => $video
		);
			$this->model_resep->insert_data($data,'tb_resep');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/resep');
		}

	}
	public function _rules()
	{
		$this->form_validation->set_rules('suku','suku','required',['required' => 'Suku Wajib diisi']);
		$this->form_validation->set_rules('nama_resep','nama_resep','required',['required' => 'Nama Resep Wajib diisi']);
	}

	public function update($id)
	{
		$where= array('id_resep' => $id);
		$data['resep'] = $this->db->query("select * from tb_resep where id_resep='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_resep', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function update_aksi()
	{
		$id= $this->input->post('id_resep');
		$suku= $this->input->post('suku'); 
		$nama_resep= $this->input->post('nama_resep'); 
		$cara_buat= $this->input->post('cara_buat'); 
		$alat= $this->input->post('alat'); 
		$bahan= $this->input->post('bahan'); 
		$keterangan= $this->input->post('keterangan'); 
		$foto = $_FILES['foto']['name'];
			$video = $_FILES['video']['name'];
			if ($foto='' or $video=''){}else{
				$config['upload_path'] = './uploads';
				$config['allowed_types'] ='jpg|jpeg|png|gif|mp4';
				$config['max_size']             = 100000;
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){

				}else{
					$foto=$this->upload->data('file_name');
				
				}
				if ($video='' or $video=''){}else{
				$config['upload_path'] = './uploads';
				$config['allowed_types'] ='jpg|jpeg|png|gif|mp4';
				$config['max_size']             = 100000;
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('video')){

				}else{
					$video=$this->upload->data('file_name');
					
			}
		}
	}
	

		$data = array(
			'suku'    => $suku, 
			'nama_resep'    => $nama_resep,
			'cara_buat'    => $cara_buat,
			'alat'    => $alat,
			'bahan'    => $bahan,
			'keterangan'    => $keterangan,
			'foto'    => $foto,
			'video'    => $video
		);

		$where = array(
			'id_resep'    => $id 
		);
		$this->model_resep->update_data($where,$data,'tb_resep');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/resep');
	}
	public function delete ($id)
	{
		$where = array('id_resep' => $id);
		$this->model_resep->delete_data($where,'tb_resep');
		redirect('admin/resep');
	}
	public function detail($id_resep)
	{
		$data['resep'] = $this->model_resep->detail_resep($id_resep);
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_resep',$data);
		$this->load->view('templates_admin/footer');
	}
	public function video($id_resep)
	{
		$data['resep'] = $this->model_resep->detail_resep($id_resep);
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/video_resep',$data);
		$this->load->view('templates_admin/footer');
	}
}

 ?>