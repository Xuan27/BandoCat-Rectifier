<?php
	class A
	{
		public static function deleteDir($tiles) {
		if (! is_dir($tiles)) {
			throw new InvalidArgumentException("$dirPath must be a directory");
		}
		if (substr($tiles, strlen($tiles) - 1, 1) != '/') {
			$tiles .= '/';
		}
		$files = glob($tiles . '*', GLOB_MARK);
		foreach ($files as $file) {
			if (is_dir($file)) {
				self::deleteDir($file);
			} else {
				unlink($file);
			}
		}
		rmdir($tiles);
		}
	}
?>