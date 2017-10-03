<?php
namespace core;

class Autoload
{
	public function __construct()
	{
		spl_autoload_register(array($this, '_autoload'));
	}
	private function _autoload($file)
	{
		$file = str_replace("\\", "/", trim($file, '\\')) . '.php';
		// echo "<br>Autoload : " . $file . "</br>";
		if(file_exists($file)) {
			require $file;
		}
		/*echo 'Trying to load ', $file, ' via ', __METHOD__, "()\n";
		require $file . '.php'*/;
	}	
}