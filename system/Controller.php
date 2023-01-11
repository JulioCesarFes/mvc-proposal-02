<?php class Controller {

	static function partial ($filepath, $arguments) {
		extract($arguments);

		require_once 'views' . static::$views_folder . '/' . $filepath . '.php';
	}


	static private $filepath;
	static private $arguments;

	static function render ($filepath, $arguments) {

		self::$filepath = $filepath;
		self::$arguments = $arguments;

		require_once 'templates' . self::$getTemplate() . '.php';
	}



	static function yield() {
		self::partial(self::$filepath, self::$arguments);
	}



	static function redirect ($path) {
		header("Location: $path");
	}



	static function getTemplate () {
		if (!static::$template) return 'application';

		return static::$template;
	}

}