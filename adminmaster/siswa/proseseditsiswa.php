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
    $query = "SELECT * FROM siswa where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    

	$npsn=$_POST['npsn'];
	$tahun_ajaran=$_POST['tahun_ajaran'];
	$kelas=$_POST['kelas'];
	$jurusan=$_POST['jurusan'];
  $rombel=$_POST['rombel'];
  $jumlah_putra=$_POST['jumlah_putra'];
  $jumlah_putri=$_POST['jumlah_putri'];
  $kms=$_POST['kms'];
  $non_kms=$_POST['non_kms'];
  $jumlah_siswa=$_POST['jumlah_siswa'];
	
  mysql_query("UPDATE  siswa  SET
    npsn='$npsn',
    tahun_ajaran='$tahun_ajaran',
    kelas='$kelas',
    jurusan='$jurusan',
    rombel='$rombel',
    jumlah_putra='$jumlah_putra',
    jumlah_putri='$jumlah_putri',
    kms='$kms',
    non_kms='$non_kms',
    jumlah_siswa='$jumlah_siswa'
     where npsn='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data Siswa');
      window.location.assign('siswaadm.php');
		</script>";
?>
<!--
      window.location.assign('kepsekadm.php');