<?php 
class Dashboard_admin extends CI_Controller {

	public function index()
	{
		$pemakaian = $this->db->query("SELECT * FROM tb_pemakaian");
		$responden = $this->db->query("SELECT * FROM tb_responden");
		$admin = $this->db->query("SELECT * FROM tb_admin");
		$data['pemakaian']=$pemakaian->num_rows();
		$data['admin']=$admin->num_rows();
		$data['responden']=$responden->num_rows();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard_admin',$data);
		$this->load->view('templates_admin/footer');
	}
}

 ?>