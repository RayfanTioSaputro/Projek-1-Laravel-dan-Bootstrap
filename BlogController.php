<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

	public function home(){
		return view('home');
	}

	public function profil(){
		return view('profil');
	}

	public function pengalaman(){
		return view('pengalaman');
	}

	public function portofolio(){
		return view('portofolio');
	}

}