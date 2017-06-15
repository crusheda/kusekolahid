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
    $query = "SELECT * FROM wakasek where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    
	 $npsn=$_POST['npsn'];
  $tahun_ajaran=$_POST['tahun_ajaran'];
  $nbm=$_POST['nbm'];
  $wakil_kepala=$_POST['wakil_kepala'];
  $waka_bidang=$_POST['waka_bidang'];
  $sk_pengangkatan=$_POST['sk_pengangkatan'];
  $tgl_sk=$_POST['tgl_sk'];
  $asal_sk=$_POST['asal_sk'];
  $tmt_jabatan=$_POST['tmt_jabatan'];
  $masa_tugaske=$_POST['masa_tugaske'];
  $tgl_habis=$_POST['tgl_habis'];
	
  mysql_query("UPDATE  wakasek SET
    npsn='$npsn',
    tahun_ajaran='$tahun_ajaran',
    nbm='$nbm',
    wakil_kepala='$wakil_kepala',
    waka_bidang='$waka_bidang',
    sk_pengangkatan='$sk_pengangkatan',
    tgl_sk='$tgl_sk',
    asal_sk='$asal_sk',
    tmt_jabatan='$tmt_jabatan',
    masa_tugaske='$masa_tugaske',
    tgl_habis='$tgl_habis'
    
     where npsn='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data Wakil Kepala Sekolah');
      window.location.assign('wakasekadm.php');
		</script>";
?>
<!--
      window.location.assign('kepsekadm.php');