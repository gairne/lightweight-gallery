<?php

require_once('database.php');
require_once('functions.php');

if (isset($_GET['album'])) {
	if (is15charHexString($_GET['album'])) {
		$albumID = db_getAlbumID_fromHex($_GET['album']);
	}
	else {
		$albumID = db_getAlbumID_fromName($_GET['album']);
	}
	if ($albumID == null) {
		//error
	}
	
	$albumDetails = db_getAlbumDetails($albumID);
	$photoThumbnails = db_getPhotoThumbnails($albumID);
	
	include 'theme/album.php';
}
else if (isset($_GET['photo'])) {
	if (is15charHexString($_GET['photo'])) {
		$photoID = db_getAlbumID_fromHex($_GET['photo']);
		if ($photoID == null) {
			//error
		}
	}
	else {
		//error
	}
	
	$photoDetails = db_getPhotoDetails($photoID);
	
	include 'theme/image.php';
}
else { //Display Index
	$albums = db_getAlbums();
	
	include 'theme/albums.php';
}

?>
