<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class pengguna extends CI_Controller{

		public function __construct(){ 

		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form'); 
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('model_pengguna');
	}

	public function index(){ 
		$jumlah_data = $this->model_pengguna->jumlah_data();
	    $config['base_url'] = base_url().'index.php/pengguna/index/';
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
	    $data['pengguna'] = $this->model_pengguna->data($config['per_page'],$from);
		$this->load->view('admin/view_pengguna',$data); 

	}

	public function tambah_pengguna(){
		$this->form_validation->set_rules('nama_pengguna','Nama Pengguna','required');
		$this->form_validation->set_rules('password','Password pengguna','required');

		if($this->form_validation->run()== FALSE){
			$this->load->view('admin/view_tambah_pengguna');
		}
		else{
			$sukses="<div class='alert alert-success'>Data anda berhasil ditambahkan</div>";
			$this->session->set_flashdata("sukses",$sukses);
			$this->model_pengguna->tambah_pengguna();
			redirect('pengguna/index');

		}

	}

}



?>