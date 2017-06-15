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
    $query = "SELECT * FROM prestasi where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    
	$npsn=$_POST['npsn'];
  $thn_ajaran=$_POST['thn_ajaran'];
  $jns_prestasi=$_POST['jns_prestasi'];
  $level=$_POST['level'];
  $hasil=$_POST['hasil'];
  $ket=$_POST['ket'];
  $pemegang=$_POST['pemegang'];
  $tgl_plaksanaan=$_POST['tgl_plaksanaan'];
	
  mysql_query("UPDATE  prestasi SET
    npsn='$npsn',
    thn_ajaran='$thn_ajaran',
    jns_prestasi='$jns_prestasi',
    level='$level',
    hasil='$hasil',
    ket='$ket',
    pemegang='$pemegang',
    tgl_plaksanaan='$tgl_plaksanaan'
    
     where npsn='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data Prestasi');
      window.location.assign('prestasi_adm.php');
		</script>";
?>
<!--
      window.location.assign('prestasi_adm.php');