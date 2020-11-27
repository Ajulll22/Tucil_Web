<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
 {
  if ($this->request->getMethod() == 'post') {

   $rules = [
    'Username' => 'required',
    'Password' => 'required'
   ];

   $validate = $this->validate($rules);
   if ($validate) {
    return view('Home');
   } else {
    return redirect()->back()->withInput()->with('validation', $this->validator);
   }
  }
  $data['title'] = "Halaman Depan";

  echo view('login/l_header', $data);
  echo view('login/l_content', $data);
 }
}