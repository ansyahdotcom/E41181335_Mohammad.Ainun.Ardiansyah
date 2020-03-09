<?php

class M_data extends CI_Model{
  // ambil data dari tabel wisata
	function tampil_data(){
		return $this->db->get('wisata');
    }
  // function input_data  
  function input_data($data,$table){
	  $this->db->insert($table,$data);
    }
  
  // function hapus_data  
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
    }
  // function edit_data  
  function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	  }
  // function update_data  
	function update_data($where,$data,$table){
		$this->db->where($where);
    $this->db->update($table,$data);
    }

}