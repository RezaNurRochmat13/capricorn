<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class model_produk extends CI_Model{

	public function __construct(){ //Function untuk mendeklarasikan konstruktor seperti yang ada di Java. 
								  //Tetapi function ini mendeklarasikan class-class yang ada di CodeIgniter seperti helper, library dll.
								//Dengan mendeklarasikan semua library atau helper yg dibutuhkan,
								// maka tidak perlu mendeklarasikan lagi di masing-masing function.
		parent::__construct();
		$this->load->database(); //Sebuah library untuk meload semua fungsi library untuk database.
	}

	public function data($number,$offset){ //Function untuk melimit hasil dari data yang diambil.
		$this->db->select('produk.id_produk,produk.nama_produk,produk.harga_produk,
							produk.deskripsi_produk,promosi.nama_promosi,kategori_produk.nama_kategori_produk');
		$this->db->where('produk.id_promosi=promosi.id_promosi AND produk.id_kategori_produk=kategori_produk.id_kategori_produk');
		return $query= $this->db->get('produk,promosi,kategori_produk',$number,$offset)->result();		
	}
 
	public function jumlah_data(){ //Function untuk menampilkan jumlah data yang ada.
		$this->db->select('produk.id_produk,produk.nama_produk,produk.harga_produk,
							produk.deskripsi_produk,promosi.nama_promosi,kategori_produk.nama_kategori_produk');
		$this->db->where('produk.id_promosi=promosi.id_promosi AND produk.id_kategori_produk=kategori_produk.id_kategori_produk');
		return $query= $this->db->get('produk,promosi,kategori_produk')->num_rows();
	}

	public function tambah_produk(){ //Function untuk tambah data.
		$id_produk = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$harga_produk = $this->input->post('harga_produk');
		$deskripsi_produk = $this->input->post('deskripsi_produk');
		$id_promosi = $this->input->post('id_promosi');
		$id_kategori_produk = $this->input->post('id_kategori_produk');

		$data = array(
			'id_produk' => $id_produk,
			'nama_produk' => $nama_produk,
			'harga_produk' => $harga_produk,
			'deskripsi_produk' => $deskripsi_produk,
			'id_promosi' => $id_promosi,
			'id_kategori_produk' => $id_kategori_produk
			);

		$this->db->insert('produk',$data);
	}

	public function promosi(){ //Script untuk mengambil data promosi.

		$this->db->select('*');
		$query=$this->db->get('promosi');
		return $query->result();
	}

	public function kategori(){ //Script untuk mengambil data kategori.

		$this->db->select('*');
		$query=$this->db->get('kategori_produk');
		return $query->result();
	}

	public function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function cari($keyword){
		$this->db->select('produk.id_produk,produk.nama_produk,produk.harga_produk,
							produk.deskripsi_produk,promosi.nama_promosi,kategori_produk.nama_kategori_produk');
		$this->db->where('produk.id_promosi=promosi.id_promosi 
						AND produk.id_kategori_produk=kategori_produk.id_kategori_produk');
		$this->db->like('produk.nama_produk',$keyword);
		$query= $this->db->get('produk,promosi,kategori_produk');
		return $query->result();
	}


}





?>