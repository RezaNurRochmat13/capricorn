<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*Programmed By: Reza Nur Rochmat
*Developed By KOMSI UGM
*Source www.malasngoding.com
*CodeIgniter Framework 3.0.6
*Copyright 2016. All Right Reserved
*/

class stok extends CI_Controller{

	public function __construct(){ //Function untuk mendeklarasikan konstruktor seperti yang ada di Java. 
								  //Tetapi function ini mendeklarasikan class-class yang ada di CodeIgniter seperti helper, library dll.
								//Dengan mendeklarasikan semua library atau helper yg dibutuhkan,
								// maka tidak perlu mendeklarasikan lagi di masing-masing function.
		parent::__construct();
		$this->load->helper('url'); //Sebuah helper dari CodeIgniter untuk membantu ketika ada perpindahan layout.
	}

	public function index(){ //Function untuk menampilkan halaman data stok produk.
		$this->load->view('admin/view_stok'); //Script untuk menampilkan halaman data stok produk.
	}
}







?>