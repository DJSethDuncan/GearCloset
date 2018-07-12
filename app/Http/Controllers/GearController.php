<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gearController extends Controller
{
	public function index () {
		return view('gear');
	}
}
