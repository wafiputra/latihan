<?php 
 
class M_data extends CI_Model{
	function tampil(){
		return $this->db->get('customer');
	}
	function input($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit($where, $table){
		return $this->db->get_where($table,$where);
		
	}
	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}