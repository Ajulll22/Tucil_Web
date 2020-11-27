<?php namespace App\Controllers;

class Detail extends BaseController
{
	public function index()
	{
		$data['title'] = "Detail Produk";

		echo view('detail/d_header', $data);
		echo view('detail/d_content', $data);
	}

	//--------------------------------------------------------------------

}