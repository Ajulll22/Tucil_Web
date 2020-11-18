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
  return view('login');
 }
}