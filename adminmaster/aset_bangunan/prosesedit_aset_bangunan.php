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
    $query = "SELECT * FROM aset_bangunan where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    
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
	
  mysql_query("UPDATE  aset_bangunan SET
    npsn='$npsn',
    nama_bangunan='$nama_bangunan',
    kode_bangunan='$kode_bangunan',
    register_bangunan='$register_bangunan',
    kondisi_bangunan='$kondisi_bangunan',
    kostruksi_bangunan='$kostruksi_bangunan',
    luas_lantai='$luas_lantai',
    lokasi='$lokasi',
    tahun_pembangunan='$tahun_pembangunan',
    luas_bangunan='$luas_bangunan',
    biaya_pembangunan='$biaya_pembangunan'
     where npsn='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data Aset Bangunan');
      window.location.assign('aset_bangunan_adm.php');
		</script>";
?>
<!--
      window.location.assign('kepsekadm.php');