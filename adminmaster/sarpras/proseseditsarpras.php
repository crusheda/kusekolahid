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
    $query = "SELECT * FROM sarpras where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    

	$npsn=$_POST['npsn'];
  $nama_prasarana=$_POST['nama_prasarana'];
  $jumlah=$_POST['jumlah'];
  $kondisi_baik=$_POST['kondisi_baik'];
  $kondisi_rusakringan=$_POST['kondisi_rusakringan'];
  $kondisi_rusaksedang=$_POST['kondisi_rusaksedang'];
  $kondisi_rusakberat=$_POST['kondisi_rusakberat'];
  $kondisi_sarpras=$_POST['kondisi_sarpras'];
  $status_kepemilikan=$_POST['status_kepemilikan'];
  $tahun_pengadaan=$_POST['tahun_pengadaan'];
	
  mysql_query("UPDATE  sarpras  SET
    npsn='$npsn',
    nama_prasarana='$nama_prasarana',
    jumlah='$jumlah',
    kondisi_baik='$kondisi_baik',
    kondisi_rusakringan='$kondisi_rusakringan',
    kondisi_rusaksedang='$kondisi_rusaksedang',
    kondisi_rusakberat='$kondisi_rusakberat',
    kondisi_sarpras='$kondisi_sarpras',
    status_kepemilikan='$status_kepemilikan',
    tahun_pengadaan='$tahun_pengadaan'    
     where npsn='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data Sarana Dan Prasarana');
      window.location.assign('sarprasadm.php');
		</script>";
?>
<!--
      window.location.assign('kepsekadm.php');