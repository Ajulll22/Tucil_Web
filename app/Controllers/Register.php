<?php namespace App\Controllers;

class Register extends BaseController
{
	public function index()
	{
		$data['title'] = "Halaman Registrasi";

		echo view('register/r_header', $data);
		echo view('register/r_content', $data);
	}

	//--------------------------------------------------------------------

}