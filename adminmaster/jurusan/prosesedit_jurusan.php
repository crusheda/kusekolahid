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
    $query = "SELECT * FROM jurusan where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    
	 $npsn=$_POST['npsn'];
  $thn_ajaran=$_POST['thn_ajaran'];
  $jurusan=$_POST['jurusan'];
  $akreditasi=$_POST['akreditasi'];
  $sk_akreditasi=$_POST['sk_akreditasi'];
  $tglsk_akreditasi=$_POST['tglsk_akreditasi'];
  $tgl_habis=$_POST['tgl_habis'];
  
	
  mysql_query("UPDATE  jurusan SET
    npsn='$npsn',
    thn_ajaran='$thn_ajaran',
    jurusan='$jurusan',
    akreditasi='$akreditasi',
    sk_akreditasi='$sk_akreditasi',
    tglsk_akreditasi='$tglsk_akreditasi',
    tgl_habis='$tgl_habis'
     where npsn='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data Jurusan');
      window.location.assign('jurusan_adm.php');
		</script>";
?>
<!--
      window.location.assign('kepsekadm.php');