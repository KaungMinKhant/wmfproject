<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	public function __construct()
	{
		session_start();
		$this->middleware('auth');
	}

	public function index()
	{
		return view('main');
	}
}
