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

	public function __construct(){ //Function untuk mendeklarasikan konstruktor seperti yang ada di Java. 
								  //Tetapi function ini mendeklarasikan class-class yang ada di CodeIgniter seperti helper, library dll.
								//Dengan mendeklarasikan semua library atau helper yg dibutuhkan,
								// maka tidak perlu mendeklarasikan lagi di masing-masing function.
		parent::__construct();
		$this->load->helper('url'); //Sebuah helper dari CodeIgniter untuk membantu ketika ada perpindahan layout.
	}

	public function index(){ //Function digunakan untuk meload sebuah view.

		$this->load->view('admin/view_login'); //Script untuk menampilkan halaman login admin.
	} 

	public function dashboard(){ //Function untuk meload sebuah halaman view.

		$this->load->view('admin/view_dashboard'); //Script untuk menampilkan halaman dashoard admin.
	}
}



?>