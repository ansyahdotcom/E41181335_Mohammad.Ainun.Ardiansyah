<?php

class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
    $this->load->helper('url');
	}

  //menampilkan data wisata ke v_tampil
	function index(){
		$data['wisata'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
    }
  
  // masuk form tambah data v_input 
  function tambah(){
		$this->load->view('v_input');
  }

  // tambah data ke tabel wisata
	function tambah_aksi(){
    // menangkap inputan
		$NM_WST = $this->input->post('NM_WST');
		$ALAMAT_WST = $this->input->post('ALAMAT_WST');
		$TLP_WST = $this->input->post('TLP_WST');
    // jadikan array
		$data = array(
			'NM_WST' => $NM_WST,
			'ALAMAT_WST' => $ALAMAT_WST,
			'TLP_WST' => $TLP_WST
      );
    // masukkan ke database dengan model m_data
		$this->m_data->input_data($data,'wisata');
		redirect('crud/index');
  }

  // hapus data tabel wisata 
  function hapus($NM_WST){
    // hapus berdasarkan nama wisata
    $where = array('NM_WST' => $NM_WST);
    // hapus data di database
		$this->m_data->hapus_data($where,'wisata');
		redirect('crud/index');
  }
  
  // masuk form ubah data v_edit
  function edit($NM_WST){
    // ambil data menurut nama wisata
    $where = array('NM_WST' => $NM_WST);
    $data['wisata'] = $this->m_data->edit_data($where,'wisata')->result();
    $this->load->view('v_edit',$data);
  }

  // ubah data tabel wisata
  function update(){
    // menangkap inputan
    $ID_WST = $this->input->post('ID_WST');
    $NM_WST = $this->input->post('NM_WST');
    $ALAMAT_WST = $this->input->post('ALAMAT_WST');
    $TLP_WST = $this->input->post('TLP_WST');
    // jadikan array 
    $data = array(
      'NM_WST' => $NM_WST,
      'ALAMAT_WST' => $ALAMAT_WST,
      'TLP_WST' => $TLP_WST
    );
    // ubah data berdasar nama wisata 
    $where = array(
      'NM_WST' => $NM_WST
    );
     
    $this->m_data->update_data($where,$data,'wisata');
    redirect('crud/index');
  }
}