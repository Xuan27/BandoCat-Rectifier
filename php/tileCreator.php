<?php
	$image = json_decode($_POST['json_data']);
	
	$subdir = "tiles_" . $image;
	// if(is_dir($subdir)) {
			// $deleteTiles = "RD /S /Q \"C:\wamp\www\Georectification_Application\\$subdir\\\"" ;
			// exec($deleteTiles);
	// }
	if(!is_dir($subdir))
	{
		mkdir($subdir);
	}
	
	$dimensions =  getimagesize ($image);
	$imageInfo = array(
	'fileName' => $image,
	'height' => $dimensions[1], 
	'width' => $dimensions[0]);
	
	$zoom = log(max($dimensions[0], $dimensions[1])/256, 2);
	$zoom = ceil($zoom);

	$command = "gdal2tiles-multiprocess.py -l -p raster -z 0-" . $zoom . " -w none -e " . $image . " " . $subdir;

	exec($command);
	echo json_encode($imageInfo);	
?>
