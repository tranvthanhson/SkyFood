<?php 

namespace App\Controllers;

use Core\App;

class UserController
{
	public function index()
	{
		$users = App::get('database')->selectAll('users');

		return view('users', compact('users')); 
	}

	public function store()
	{
		//die($_POST['name']);
		App::get('database')->insert('users', [
			'name' => $_POST['name']	
		]);

		return redirect('users');
		// header('Location: /users');
	}

	public function delete()
	{
		App::get('database')->delete('users', [
			'name' => $_POST['name']
		]);

		return redirect('users');
	}
}