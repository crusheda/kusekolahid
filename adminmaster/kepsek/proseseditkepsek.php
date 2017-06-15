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
    $query = "SELECT * FROM kepsek where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    

	$npsn=$_POST['npsn'];
	$tahun_ajaran=$_POST['tahun_ajaran'];
	$kepala_sekolah=$_POST['kepala_sekolah'];
	$nbm=$_POST['nbm'];
  $tgl_lahir=$_POST['tgl_lahir'];
  $sk_pengangkatan=$_POST['sk_pengangkatan'];
  $tgl_sk=$_POST['tgl_sk'];
  $asal_sk=$_POST['asal_sk'];
  $tmt_jabatan=$_POST['tmt_jabatan'];
  $masa_tugaske=$_POST['masa_tugaske'];
  $tgl_berahir=$_POST['tgl_berahir'];
	
  mysql_query("UPDATE  kepsek  SET
    npsn='$npsn',
    tahun_ajaran='$tahun_ajaran',
    kepala_sekolah='$kepala_sekolah',
    nbm='$nbm',
    tgl_lahir='$tgl_lahir',
    sk_pengangkatan='$sk_pengangkatan',
    tgl_sk='$tgl_sk',
    asal_sk='$asal_sk',
    tmt_jabatan='$tmt_jabatan',
    masa_tugaske='$masa_tugaske',
    tgl_berahir='$tgl_berahir'
     where npsn='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data Kepala Sekolah');
      window.location.assign('kepsekadm.php');
		</script>";
?>
<!--
      window.location.assign('kepsekadm.php');