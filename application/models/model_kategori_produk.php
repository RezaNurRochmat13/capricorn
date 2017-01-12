<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class model_kategori_produk extends CI_Model{

	public function __construct(){ //Function untuk mendeklarasikan konstruktor seperti yang ada di Java. 
								  //Tetapi function ini mendeklarasikan class-class yang ada di CodeIgniter seperti helper, library dll.
								//Dengan mendeklarasikan semua library atau helper yg dibutuhkan,
								// maka tidak perlu mendeklarasikan lagi di masing-masing function.
		parent::__construct();
		$this->load->database(); //Sebuah library untuk meload semua fungsi library untuk database.
	}

	public function tampil_kategori(){ //Function untuk mengambil data di tabel kategori.

		$this->db->select('*');
		$query=$this->db->get('kategori_produk');
		return $query->result();
	}

	public function data($number,$offset){ //Function untuk melimit hasil dari data yang diambil.
		$this->db->select('*');
		$query=$this->db->get('kategori_produk');
		return $query= $this->db->get('kategori_produk',$number,$offset)->result();		
	}
 
	public function jumlah_data(){ //Function untuk menampilkan jumlah data yang ada.
		$this->db->select('*');
		$query=$this->db->get('kategori_produk');
		return $query= $this->db->get('kategori_produk')->num_rows();
	}

	public function tambah_kategori(){
		$nama_kategori_produk = $this->input->post('nama_kategori_produk');

		$data = array(
			'nama_kategori_produk' => $nama_kategori_produk
			);
		$this->db->insert('kategori_produk',$data);
	}
}






?>