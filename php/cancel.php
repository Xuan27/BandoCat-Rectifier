<?php
	include('class.php');
	
	$script = json_decode( $_POST['jsonData']);

	$tiles ="../tiles/" . $script -> tiles;
	
	A::deleteDir($tiles);
?>
