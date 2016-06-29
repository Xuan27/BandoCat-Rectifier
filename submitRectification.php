<?php
	$script = json_decode( $_POST['jsonData']);
	//print_r($script);

	$command = $script -> translate;
	$command2 = $script -> warp;
	$tiles ="tiles_" . $script -> tiles;

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
	
	$deleteTiles = "RD /S /Q \"C:\wamp\www\Georectification_Application\\$tiles\\\"" ;
	exec($deleteTiles)
?>
