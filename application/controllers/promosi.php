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


	public function __construct(){ 

		parent::__construct();
		$this->load->library('pagination'); 
		$this->load->library('form_validation'); 
		$this->load->library('session');
		$this->load->helper('url'); 
		$this->load->helper('form'); 
		$this->load->model('model_promosi'); 
	}

	public function index(){ 

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
		$this->load->view('admin/view_promosi',$data); 
	}

	public function tambah_data_promosi(){ 

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

	public function edit_promosi($kode){
		$where = array('id_promosi' => $kode);
		$data['edit_promosi'] = $this->model_promosi->edit_data($where,'promosi')->result();
		$this->load->view('admin/view_ubah_promosi',$data);	
	}

	public function update_promosi(){
		$kode = $this->input->post('id_promosi');
		$nama_promosi = $this->input->post('nama_promosi');
		$deskripsi_promosi = $this->input->post('deskripsi_promosi');
		$tanggal_berakhir_promosi = $this->input->post('tanggal_berakhir_promosi');

		$data = array(
			'nama_promosi' =>$nama_promosi,
			'deskripsi_promosi' => $deskripsi_promosi,
			'tanggal_berakhir_promosi' =>$tanggal_berakhir_promosi
			);

		$where = array(
			'id_promosi' => $kode
			);

		$this->form_validation->set_rules('nama_promosi','Nama Promosi','required');
		$this->form_validation->set_rules('deskripsi_promosi','Deskripsi Promosi','required');
		$this->form_validation->set_rules('tanggal_berakhir_promosi','Tanggal Berakhir Promosi','required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('admin/view_ubah_promosi');
		}

		else{
			$this->model_promosi->update_data($where,$data,'promosi');
			$ubah = "<div class='alert alert-info'>Data anda telah berhasil diubah</div>";
			$this->session->set_flashdata("ubah",$ubah);
			redirect('promosi/index');
		}
	}

	public function delete_promosi($id){
		$where = array('id_promosi' => $id );
		$this->model_promosi->delete($where,'promosi');
		$hapus = "<div class='alert alert-danger'>Data anda telah berhasil dihapus</div>";
		$this->session->set_flashdata("hapus",$hapus);
		redirect('promosi/index');
	}

	public function cari_promosi(){
		$keyword = $this->input->post('keyword');
		$data['promosi'] = $this->model_promosi->cari($keyword);
		$this->load->view('admin/view_promosi',$data);
	}
}





?>