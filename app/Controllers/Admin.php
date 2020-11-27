<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data['title'] = "Halaman Admin";

		echo view('admin/a_header', $data);
		echo view('admin/a_sidebar', $data);
		echo view('admin/a_content', $data);
		echo view('admin/a_footer', $data);
	}

	//--------------------------------------------------------------------

}