<?php 
class Model_pertanyaan extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_pertanyaan');
	}
	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function detail_pertanyaan($id_pertanyaan)
	{
		$result = $this->db->where('id_pertanyaan',$id_pertanyaan)->get('tb_pertanyaan');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
 }
