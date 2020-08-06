<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	



	public function index()
	{
		// Untuk memanggil fungsi2 untuk berinteraksi kedalam database (CRUD)
		$this->load->model('MSudi');

		
		// Untuk memanggil nama table dan seleksi pada saat pemanggilan data
		$GetMenu = $this->MSudi->GetDataWhere('menu', 'status_menu', 1);
		// Untuk menjalankan fungsi GetMenu dan membuat data array kedalam templates/halaman website
		$data['GetMenu'] = $GetMenu->result();
		// Untuk memanggil atau menjalankan layout/file tampilan dan memasukan data array


		// Untuk memanggil nama table dan seleksi pada saat pemanggilan data
		$GetBox = $this->MSudi->GetDataWhere('menu_box', 'status_box', 1);
		// Untuk menjalankan fungsi GetMenu dan membuat data array kedalam templates/halaman website
		$data['GetBox'] = $GetBox->result();
		// Untuk memanggil atau menjalankan layout/file tampilan dan memasukan data array





		$this->load->view('welcome_message',$data);
	}
}
