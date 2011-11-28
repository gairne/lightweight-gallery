<?php

require_once('dbconfig.php');

function db_connect() {
	global $dbConnection;
	try {
		$dbConnection = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
	} catch(PDOException $err) {
		//sprintf($err->getMessage());
		$dbConnection = null;
	}
}

function db_create() {
	
}

// Gallery related

function db_getGalleryName() {
	//return name
}

// Album related

function db_getAlbums() {
	db_connect();
	//return [{ID, hex, name}]
}

function db_getAlbumDetails($albumID) {
	//return {name, description} or null
}

function db_getPhotoThumbnails($albumID) {
	//return [thumbnailURL] or null
}

function db_getAlbumID_fromHex($hex) {
	//return albumID or null
}

function db_getAlbumID_fromName($albumName) {
	//return albumID or null
}

// Photo related

function db_getPhotoDetails($photoID) {
	//return {thumbnailURL, fullURL, datetime, exposure, flash, pixelx, pixely, make, model, altitude, altitudeReference, lat, lon} or null
}

function db_getPhotoID_fromHex($hex) {
	//return photoID or null
}


