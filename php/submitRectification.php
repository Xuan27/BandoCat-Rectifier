<?php
	$script = json_decode( $_POST['jsonData']);
	//print_r($script);

	$command = $script -> translate;
	$command2 = $script -> warp;
	$tiles ="../tiles/" . $script -> tiles;

	$t0 = microtime(true);
	if(exec($command))
	echo "SUCCESS";
	else
	echo "FAILURE";
	
	$t1 = microtime(true);
	printf("  %.1f seconds", $t1 - $t0);
	echo" \n\n";
	$t0 = microtime(true);
	if(exec($command2))
	echo "SUCCESS";
	else
	echo "FAILURE";
	$t1 = microtime(true);

	printf("  %.1f seconds", $t1 - $t0);
	 
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
	A::deleteDir($tiles);
?>
