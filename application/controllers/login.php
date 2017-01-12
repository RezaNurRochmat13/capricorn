<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class login extends CI_Controller{

	public function __construct(){ 

		parent::__construct();
		$this->load->helper('url'); 
	}

	public function index(){ 

		$this->load->view('admin/view_login'); 
	} 

	public function dashboard(){ 

		$this->load->view('admin/view_dashboard'); 
	}
}



?>