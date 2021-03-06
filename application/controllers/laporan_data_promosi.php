<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class laporan_data_promosi extends CI_Controller{

	public function __construct(){ 
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('model_laporan_data_promosi');
	}

	public function index(){
		$jumlah_data = $this->model_laporan_data_promosi->jumlah_data();
	    $config['base_url'] = base_url().'index.php/laporan_data_promosi/index/';
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
	    $data['laporan_promosi'] = $this->model_laporan_data_promosi->data($config['per_page'],$from);
		$this->load->view('admin/view_laporan_data_promosi',$data); 
	}

}




?>