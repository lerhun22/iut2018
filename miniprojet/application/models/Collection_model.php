<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Collection_model extends CI_Model{
	var $table = '_pokemon';

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	Public function getall(){
        $this->db->from($this->table);
		$query=$this->db->get();
		return $query->result();
	}
	
	Public function get_by_id($id){
		$this->db->from($this->table);
		$this->db->where('pokemon_id',$id);
		
		$query=$this->db->get();
		return $query->row();
	}

	Public function add($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	Public function update($where,$data){
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	Public function delete_by_id($id){
		$this->db->where('pokemon_id',$id);
		$this->db->delete($this->table);
	}
}