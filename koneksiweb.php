<?php

$host   = "209.58.165.153"; // nama server
$userdb = "kusk7157_dapodik"; // user database
$passdb = "pw2dapodik"; //password database
$namadb = "kusk7157_dapodik"; // nama database

// koneksi ke MySQL
$koneksi = mysql_connect($host, $userdb, $passdb);
if(!$koneksi) die("Gagal dalam Koneksi ke MySQL");
else {
	// memilih database
	mysql_select_db($namadb, $koneksi)
	
	//jika database tidak ditemukan
	or die("Database tidak ditemukan");
}