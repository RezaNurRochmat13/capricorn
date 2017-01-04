<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class promosi extends CI_Controller{


	public function __construct(){ //Function untuk mendeklarasikan konstruktor seperti yang ada di Java. 
								  //Tetapi function ini mendeklarasikan class-class yang ada di CodeIgniter seperti helper, library dll.
								//Dengan mendeklarasikan semua library atau helper yg dibutuhkan,
								// maka tidak perlu mendeklarasikan lagi di masing-masing function.
		parent::__construct();
		$this->load->library('pagination'); //Script untuk meload library CodeIgniter Pagination Class.
		$this->load->library('form_validation'); //Script untuk meload library CodeIgniter khusus untuk validasi form.
		$this->load->library('session'); //Script untuk membantu mengurusi session di CodeIgniter. 
		$this->load->helper('url'); //Sebuah helper dari CodeIgniter untuk membantu ketika ada perpindahan layout.
		$this->load->helper('form'); //Script helper dari CideIgniter untuk membantu ketiak kita menggunakan form.
		$this->load->model('model_promosi'); //Script untuk meload model.
	}

	public function index(){ //Sebuah function untuk menampilkan halaman dari data promosi.

		$jumlah_data = $this->model_promosi->jumlah_data();
	    $config['base_url'] = base_url().'index.php/promosi/index/';
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
	    $data['promosi'] = $this->model_promosi->data($config['per_page'],$from);
		$this->load->view('admin/view_promosi',$data); //Script untuk menampilkan halaman data promosi.
	}

	public function tambah_data_promosi(){ //Function untuk menambah data promosi.

		$this->form_validation->set_rules('nama_promosi','Nama Promosi','required');
		$this->form_validation->set_rules('deskripsi_promosi','Deskripsi Promosi','required');
		$this->form_validation->set_rules('tanggal_berakhir_promosi','Tanggal Berakhir Promosi','required');

		if($this->form_validation->run()== FALSE){
			$this->load->view('admin/view_tambah_promosi');
		} 
		else {
			$sukses="<div class='alert alert-success'>Data berhasil masuk</div>";
			$this->session->set_flashdata("sukses",$sukses);
			$this->model_promosi->tambah_promosi();
			redirect('promosi/index');

		}

	}
}





?>