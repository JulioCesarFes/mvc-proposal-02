<?php class Scripts {

	static private $mainScripts = [];
	static private $controllerName = null;
	static private $methodName = null;

	static function mainScripts ($scripts) {
		self::$mainScripts = $scripts;
	}

	static function setControllerAndMethod ($controller, $method) {
		self::$controllerName = $controller;
		self::$methodName = $method;
	}

	static function render () {
		foreach (self::$mainScripts as $scriptName) {
			echo self::buildScript($scriptName);
		}

		if (self::$controllerName && self::$methodName) {
			echo self::buildScript(self::$controllerName . "/" . self::$methodName);
		} 
	}

	static function buildScript ($scriptName) {
		return "<script src=\"/assets/scripts/$scriptName.js\"></script>";
	}
}