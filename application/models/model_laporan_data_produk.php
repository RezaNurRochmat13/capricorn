<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class model_laporan_data_produk extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


	public function data($number,$offset){ 
		$this->db->select('produk.id_produk,produk.nama_produk,produk.harga_produk,
							produk.deskripsi_produk,promosi.nama_promosi,kategori_produk.nama_kategori_produk');
		$this->db->where('produk.id_promosi=promosi.id_promosi AND produk.id_kategori_produk=kategori_produk.id_kategori_produk');
		return $query= $this->db->get('produk,promosi,kategori_produk',$number,$offset)->result();		
	}
 
	public function jumlah_data(){ 
		$this->db->select('produk.id_produk,produk.nama_produk,produk.harga_produk,
							produk.deskripsi_produk,promosi.nama_promosi,kategori_produk.nama_kategori_produk');
		$this->db->where('produk.id_promosi=promosi.id_promosi AND produk.id_kategori_produk=kategori_produk.id_kategori_produk');
		return $query= $this->db->get('produk,promosi,kategori_produk')->num_rows();
	}
}





?>