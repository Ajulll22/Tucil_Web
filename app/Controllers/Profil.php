<?php namespace App\Controllers;

class Profil extends BaseController
{
	public function index()
	{
		$data['title'] = "Halaman Registrasi";

		echo view('profil/p_header', $data);
		echo view('profil/p_content', $data);
	}

	//--------------------------------------------------------------------

}