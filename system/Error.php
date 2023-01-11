<?php class Error {

	static function log ($txt) {
		if (!LOG_ERRORS) return;
		if (!$txt) return;

		$txt = date('d-m-y h:i:s') . " | " . $txt ;
		$myfile = file_put_contents(LOG_FILE_NAME, $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
	}
	
}