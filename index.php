<?php 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require "vendor/autoload.php";
require "core/bootstrap.php";

use App\Core\{Router, Request};

Router::load("app/routes.php")
	->direct(Request::uri(), Request::method());