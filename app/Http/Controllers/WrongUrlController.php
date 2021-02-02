<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WrongUrlController extends Controller
{
	/**
	 * 
	 * @param string $n
	 * @return \Illuminate\View\View
	 */
	public function show($n)
	{
		return view('wrongUrl')->withName($n);
	}
}
