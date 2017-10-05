<?php 

namespace App\Controllers;

class PageController {
	public function home() {
		return view('index');
	}

	public function about() {
		$company = "Son";
		return view('about', ['company' => $company]);
	}

	public function contact() {
		return view('contact');
	}
}