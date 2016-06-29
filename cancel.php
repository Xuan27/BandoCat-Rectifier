<?php
	$script = json_decode( $_POST['jsonData']);

	$tiles ="tiles_" . $script -> tiles;
	
	$deleteTiles = "RD /S /Q \"C:\wamp\www\Georectification_Application\\$tiles\\\"" ;
	system($deleteTiles);
?>