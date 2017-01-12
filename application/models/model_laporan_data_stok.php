<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class model_laporan_data_stok extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function data($number,$offset){ 
		$this->db->select('COUNT(id_produk) AS Jumlah,nama_produk');
		$this->db->group_by('nama_produk');
		return $query= $this->db->get('produk',$number,$offset)->result();		
	}
 
	public function jumlah_data(){ 
		$this->db->select('COUNT(id_produk) AS Jumlah,nama_produk');
		$this->db->group_by('nama_produk');
		return $query= $this->db->get('produk')->num_rows();
	}
}




?>