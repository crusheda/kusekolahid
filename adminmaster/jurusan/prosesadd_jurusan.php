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
    $query = "SELECT * FROM jurusan";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$npsn=$_POST['npsn'];
	$thn_ajaran=$_POST['thn_ajaran'];
	$jurusan=$_POST['jurusan'];
	$akreditasi=$_POST['akreditasi'];
  $sk_akreditasi=$_POST['sk_akreditasi'];
  $tglsk_akreditasi=$_POST['tglsk_akreditasi'];
  $tgl_habis=$_POST['tgl_habis'];
  
	
$query=mysql_query("insert into jurusan (
    npsn,
    thn_ajaran,
    jurusan,
    akreditasi,
    sk_akreditasi,
    tglsk_akreditasi,
    tgl_habis) 
		
    values(
    '$npsn',
    '$thn_ajaran',
    '$jurusan',
    '$akreditasi',
    '$sk_akreditasi',
    '$tglsk_akreditasi',
    '$tgl_habis')");

	echo "<script>
			alert('Berhasil menambahkan data Jurusan');
			window.location.assign('jurusan_adm.php');
		</script>";
?>