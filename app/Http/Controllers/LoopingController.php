<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoopingController extends Controller
{
    //
    public function index()
	{
		return view('form_loop');
	}

	public function aksi(Request $request)
	{
		$judul ="Belajar Looping";
		$var =$request->input('angka1');
		$l = 1;
		$n = $var / 2;
		return view('vhasil_loop',compact('judul', 'l', 'n', 'var'));
		# code...
	}
}
