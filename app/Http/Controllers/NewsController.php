<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
	{
		session_start();
		$this->middleware('auth');
	}

	public function index()
	{
		return view('news');
	}
}
