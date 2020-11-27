<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	$data['title'] = "Halaman Depan";

    echo view('home/h_header', $data);
    echo view('home/h_content', $data);
	}

	//--------------------------------------------------------------------

}
