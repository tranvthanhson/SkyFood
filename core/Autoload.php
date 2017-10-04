<?php

namespace Core;

class Autoload
{
	public function __construct()
	{
		spl_autoload_register(array($this, '_autoload'));
	}
	private function _autoload($file)
	{
		// echo $file . "<br>";
		$chunks = explode("\\", $file);
		$chunks = array_map(function ($item) {
			return ucfirst($item);
		}, $chunks);
		$file = implode('/', $chunks);
		$file = lcfirst($file) . '.php';
		// echo $file . '<br>';
		if (file_exists($file)) {
			require $file;
		}
	}	
}