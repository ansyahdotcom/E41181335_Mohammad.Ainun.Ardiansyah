<?php

class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		// cek login atau belum
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('v_admin');
	}
}