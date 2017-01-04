<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class model_stok extends CI_Model{

	public function __construct(){ //Function untuk mendeklarasikan konstruktor seperti yang ada di Java. 
								  //Tetapi function ini mendeklarasikan class-class yang ada di CodeIgniter seperti helper, library dll.
								//Dengan mendeklarasikan semua library atau helper yg dibutuhkan,
								// maka tidak perlu mendeklarasikan lagi di masing-masing function.
		parent::__construct();
		$this->load->database(); //Sebuah library untuk meload semua fungsi library untuk database.
	}


	public function tampil_stok(){
		$this->db->select('COUNT(id_produk) AS Jumlah,nama_produk');
		$this->db->group_by('nama_produk');
		$query=$this->db->get('produk');
		return $query->result();
	}
}

?>