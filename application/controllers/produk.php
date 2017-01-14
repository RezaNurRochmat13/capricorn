<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class produk extends CI_Controller{

	
	public function __construct(){ 

		parent::__construct();
		$this->load->library('pagination');
		$this->load->library('form_validation'); 
		$this->load->library('session'); 
		$this->load->helper('url'); 
		$this->load->helper('form');
		$this->load->model('model_produk'); 
	}


	public function index(){
		$jumlah_data = $this->model_produk->jumlah_data();
	    $config['base_url'] = base_url().'index.php/produk/index/';
	    $config['total_rows'] = $jumlah_data;
	    $config['per_page'] = 5;
	    $from = $this->uri->segment(3);

	    //Konfigurasi pagination bootrap
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = true;
	    $config['last_link'] = true;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '&laquo';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '&raquo';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';

	    $this->pagination->initialize($config);   
	    $data['produk'] = $this->model_produk->data($config['per_page'],$from);
		$this->load->view('admin/view_produk',$data); 
	}

	public function tambah_data_produk(){ 

		$this->form_validation->set_rules('nama_produk','Nama Produk','required');
		$this->form_validation->set_rules('harga_produk','Harga Produk','required');
		$this->form_validation->set_rules('deskripsi_produk','Deskripsi Produk','required');
		$this->form_validation->set_rules('id_promosi','ID Promosi','required');
		$this->form_validation->set_rules('id_kategori_produk','ID Kategori Produk','required');

		if($this->form_validation->run() ==  FALSE){
			$data['promosi'] = $this->model_produk->promosi();
			$data['kategori'] = $this->model_produk->kategori();
			$this->load->view('admin/view_tambah_produk',$data);
		}
		else{
			$sukses="<div class='alert alert-success'>Data anda berhasil masuk</div>";
			$this->session->set_flashdata("sukses",$sukses);
			$this->model_produk->tambah_produk();
			redirect('produk/index');
		}
	}

	public function edit_produk($kode){
		$where=array('id_produk' => $kode);
		$data['edit_produk'] = $this->model_produk->edit_data($where,'produk')->result();
		$data['promosi'] = $this->model_produk->promosi();
		$data['kategori'] = $this->model_produk->kategori();
		$this->load->view('admin/view_ubah_produk',$data);
	}

	public function update_produk(){
		$kode = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$harga_produk = $this->input->post('harga_produk');
		$deskripsi_produk = $this->input->post('deskripsi_produk');
		$id_promosi = $this->input->post('id_promosi');
		$id_kategori_produk = $this->input->post('id_kategori_produk');

		$data = array(
			'nama_produk' => $nama_produk,
			'harga_produk' => $harga_produk,
			'deskripsi_produk' => $deskripsi_produk,
			'id_promosi' => $id_promosi,
			'id_kategori_produk' => $id_kategori_produk
			);

		$where = array(

			'id_produk' => $kode);

		$this->form_validation->set_rules('nama_produk','Nama Produk','required');
		$this->form_validation->set_rules('harga_produk','Harga Produk','required');
		$this->form_validation->set_rules('deskripsi_produk','Deskripsi Produk','required');
		$this->form_validation->set_rules('id_promosi','ID Promosi','required');
		$this->form_validation->set_rules('id_kategori_produk','ID Kategori Produk','required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/view_ubah_produk');
		} 
		else {
			$this->model_produk->update_data($where,$data,'produk');
			$ubah = "<div class='alert alert-info'>Data anda berhasil diubah</div>";
			$this->session->set_flashdata("ubah",$ubah);
			redirect('produk/index');		
		}
	}

	public function delete_produk($id){
		$where = array('id_produk' => $id);
		$this->model_produk->delete($where,'produk');
		$hapus = "<div class='alert alert-danger'>Data anda berhasil dihapus</div>";
		$this->session->set_flashdata("hapus",$hapus);
		redirect('produk/index');

	}

	public function cari_produk(){
		$keyword=$this->input->post('keyword');
		$data['produk'] = $this->model_produk->cari($keyword);
		$this->load->view('admin/view_produk',$data);
	}

}

?>