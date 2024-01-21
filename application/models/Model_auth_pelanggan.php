<?php 
class Model_auth_pelanggan extends CI_Model{
	public function cek_login()
	{
		$npm = set_value('npm');
		$password = set_value('password');

		$result = $this->db->where('npm',$npm)
		->where('password',$password)
		->limit(1)
		->get('tb_responden');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
}