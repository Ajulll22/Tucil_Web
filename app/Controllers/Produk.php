<?php namespace App\Controllers;

class Produk extends BaseController
{
	public function index()
	{
		$data['title'] = "Halaman Produk";

		echo view('produk/p_header', $data);
		echo view('produk/p_content', $data);
	}

	//--------------------------------------------------------------------

}