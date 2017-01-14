<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class model_pengguna extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


	public function data($number,$offset){ 
		$this->db->select('*');
		return $query= $this->db->get('pengguna',$number,$offset)->result();		
	}
 
	public function jumlah_data(){ 
		$this->db->select('*');
		return $query= $this->db->get('pengguna')->num_rows();
	}

	public function tambah_pengguna(){
		$id_pengguna = $this->input->post('id_pengguna');
		$nama_pengguna=$this->input->post('nama_pengguna');
		$password = $this->input->post('password');

		$data = array(
			'id_pengguna' => $id_pengguna,
			'nama_pengguna' => $nama_pengguna,
			'password' => $password
			);

		$this->db->insert('pengguna',$data);
	}
}




?>