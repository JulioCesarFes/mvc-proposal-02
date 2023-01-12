<?php spl_autoload_register(function ($className) {

	if (file_exists("controllers/$className.php")) {
		require_once "controllers/$className.php";
		
		if (is_subclass_of($className, 'Controller')) return;
	}

	if (file_exists("models/$className.php")) {
		require_once "models/$className.php";

		if (is_subclass_of($className, 'Model')) return;
	}
	
	if (file_exists("system/$className.php")) {
		require_once "system/$className.php";
	}
});