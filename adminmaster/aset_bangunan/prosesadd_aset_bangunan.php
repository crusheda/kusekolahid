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
    $query = "SELECT * FROM aset_bangunan";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$npsn=$_POST['npsn'];
	$nama_bangunan=$_POST['nama_bangunan'];
	$kode_bangunan=$_POST['kode_bangunan'];
	$register_bangunan=$_POST['register_bangunan'];
  $kondisi_bangunan=$_POST['kondisi_bangunan'];
  $kostruksi_bangunan=$_POST['kostruksi_bangunan'];
  $luas_lantai=$_POST['luas_lantai'];
  $lokasi=$_POST['lokasi'];
  $tahun_pembangunan=$_POST['tahun_pembangunan'];
  $luas_bangunan=$_POST['luas_bangunan'];
  $biaya_pembangunan=$_POST['biaya_pembangunan'];
	
$query=mysql_query("insert into aset_bangunan (
    npsn,
    nama_bangunan,
    kode_bangunan,
    register_bangunan,
    kondisi_bangunan,
    kostruksi_bangunan,
    luas_lantai,
    lokasi,
    tahun_pembangunan,
    luas_bangunan,
    biaya_pembangunan) 
		
    values(
    '$npsn',
    '$nama_bangunan',
    '$kode_bangunan',
    '$register_bangunan',
    '$kondisi_bangunan',
    '$kostruksi_bangunan',
    '$luas_lantai',
    '$lokasi',
    '$tahun_pembangunan',
    '$luas_bangunan',
    '$biaya_pembangunan')");

	echo "<script>
			alert('Berhasil menambahkan data aset_bangunan');
			window.location.assign('aset_bangunan_adm.php');
		</script>";
?>