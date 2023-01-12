<?php class Controller {

	static function partial ($filepath, $arguments) {
		extract($arguments);

		require_once 'views/' . static::$views_folder . '/' . $filepath . '.php';
	}



	static function render ($filepath, $arguments) {
		$class = static::class;

		$content = fn() => $class::partial($filepath, $arguments);

		require_once 'templates/' . self::getTemplate() . '.php';
	}



	static function redirect ($path) {
		header("Location: $path");
	}



	static function getTemplate () {
		if (isset(static::$template)) return static::$template;
		return 'application';
	}

}