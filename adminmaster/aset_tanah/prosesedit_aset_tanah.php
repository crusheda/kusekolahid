<?php
  $host   = "209.58.165.153"; // nama server
  $userdb = "kusk7157_dapodik"; // user database
  $passdb = "pw2dapodik"; //password database
  $namadb = "kusk7157_dapodik"; // nama database

  // koneksi ke MySQL
  $konek = mysql_connect($host, $userdb, $passdb);
  if(!$konek) die("Gagal dalam Koneksi ke MySQL");
  else {
    // memilih database
    mysql_select_db($namadb, $konek)
    
    //jika database tidak ditemukan
    or die("Database tidak ditemukan");
  }
     $kunci=$_POST['npsn'];
    $query = "SELECT * FROM aset_tanah where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    

	$npsn=$_POST['npsn'];
	$no_persil=$_POST['no_persil'];
	$kepemilikan=$_POST['kepemilikan'];
	$atasnama_sertifikat=$_POST['atasnama_sertifikat'];
  $status_tanah=$_POST['status_tanah'];
  $luas_tanah=$_POST['luas_tanah'];
  $no_sertifikat=$_POST['no_sertifikat'];
  $tgl_sertifikat=$_POST['tgl_sertifikat'];
  $thn_perolehan=$_POST['thn_perolehan'];
  $harga_perolehan=$_POST['harga_perolehan'];
  $asal_usul=$_POST['asal_usul'];
  $letak=$_POST['letak'];
  $peruntukan=$_POST['peruntukan'];
	
  mysql_query("UPDATE  aset_tanah  SET
    npsn='$npsn',
    no_persil='$no_persil',
    kepemilikan='$kepemilikan',
    atasnama_sertifikat='$atasnama_sertifikat',
    status_tanah='$status_tanah',
    luas_tanah='$luas_tanah',
    no_sertifikat='$no_sertifikat',
    tgl_sertifikat='$tgl_sertifikat',
    thn_perolehan='$thn_perolehan',
    harga_perolehan='$harga_perolehan',
    asal_usul='$asal_usul',
    letak='$letak',
    peruntukan='$peruntukan'
     where npsn='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data Aset Tanah');
      window.location.assign('aset_tanah_adm.php');
		</script>";
?>
<!--
      window.location.assign('kepsekadm.php');