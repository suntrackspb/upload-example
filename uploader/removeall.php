<?php
include('config.php');
$key = $_GET["Key"];
if ( $key == $privacykey ){
	$files = glob($uploaddir); // get all file names
	foreach($files as $file){ // iterate files
	  if(is_file($file))
		unlink($file); // delete file
	}
}