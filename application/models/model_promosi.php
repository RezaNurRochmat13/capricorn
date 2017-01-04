<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class model_promosi extends CI_Model{

	public function __construct(){ //Function untuk mendeklarasikan konstruktor seperti yang ada di Java. 
								  //Tetapi function ini mendeklarasikan class-class yang ada di CodeIgniter seperti helper, library dll.
								//Dengan mendeklarasikan semua library atau helper yg dibutuhkan,
								// maka tidak perlu mendeklarasikan lagi di masing-masing function.
		parent::__construct();
		$this->load->database(); //Sebuah library untuk meload semua fungsi library untuk database.
	}

	public function tampil_promosi(){ //Function untuk mengambil data di tabel promosi.
		$this->db->select('*');
		$query=$this->db->get('promosi');
		return $query->result();

	}

	public function data($number,$offset){ //Function untuk melimit hasil dari data yang diambil.
		$this->db->select('*');
		return $query= $this->db->get('promosi',$number,$offset)->result();		
	}
 
	public function jumlah_data(){ //Function untuk menampilkan jumlah data yang ada.
		$this->db->select('*');
		return $query= $this->db->get('promosi')->num_rows();
	}

	public function tambah_promosi(){
		$id_promosi = $this->input->post('id_promosi');
		$nama_promosi = $this->input->post('nama_promosi');
		$deskripsi_promosi = $this->input->post('deskripsi_promosi');
		$tanggal_berakhir_promosi = $this->input->post('tanggal_berakhir_promosi');

		$data = array(
			'id_promosi' => $id_promosi,
			'nama_promosi' => $nama_promosi,
			'deskripsi_promosi' => $deskripsi_promosi,
			'tanggal_berakhir_promosi' => $tanggal_berakhir_promosi

			);

		$this->db->insert('promosi',$data);

	}
}




?>