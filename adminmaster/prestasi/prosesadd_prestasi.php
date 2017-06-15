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
    $query = "SELECT * FROM prestasi";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$npsn=$_POST['npsn'];
	$thn_ajaran=$_POST['thn_ajaran'];
	$jns_prestasi=$_POST['jns_prestasi'];
	$level=$_POST['level'];
  $hasil=$_POST['hasil'];
  $ket=$_POST['ket'];
  $pemegang=$_POST['pemegang'];
  $tgl_plaksanaan=$_POST['tgl_plaksanaan'];
  
$query=mysql_query("INSERT into prestasi (
    npsn,
    thn_ajaran,
    jns_prestasi,
    level,
    hasil,
    ket,
    pemegang,
    tgl_plaksanaan) 
		
    values(
    '$npsn',
    '$thn_ajaran',
    '$jns_prestasi',
    '$level',
    '$hasil',
    '$ket',
    '$pemegang',
    '$tgl_plaksanaan')");

	echo "<script>
			alert('Berhasil menambahkan data prestasi');
			window.location.assign('prestasi_adm.php');
		</script>";
?>