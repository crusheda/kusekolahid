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
    $query = "SELECT * FROM sarpras";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$npsn                 =$_POST['npsn'];
	$nama_prasarana       =$_POST['nama_prasarana'];
	$jumlah               =$_POST['jumlah'];
	$kondisi_baik         =$_POST['kondisi_baik'];
  $kondisi_rusakringan  =$_POST['kondisi_rusakringan'];
  $kondisi_rusaksedang  =$_POST['kondisi_rusaksedang'];
  $kondisi_rusakberat   =$_POST['kondisi_rusakberat'];
  $kondisi_sarpras      =$_POST['kondisi_sarpras'];
  $status_kepemilikan   =$_POST['status_kepemilikan'];
  $tahun_pengadaan      =$_POST['tahun_pengadaan'];
	
	$query=mysql_query("insert into sarpras (
    npsn,
    nama_prasarana,
    jumlah,
    kondisi_baik,
    kondisi_rusakringan,
    kondisi_rusaksedang,
    kondisi_rusakberat,
    kondisi_sarpras,
    status_kepemilikan,
    tahun_pengadaan) 
		
    values(
    '$npsn',
    '$nama_prasarana',
    '$jumlah',
    '$kondisi_baik',
    '$kondisi_rusakringan',
    '$kondisi_rusaksedang',
    '$kondisi_rusakberat',
    '$kondisi_sarpras',
    '$status_kepemilikan',
    '$tahun_pengadaan')");
	echo "<script>
			alert('Berhasil menambahkan data Sarana Dana Prasarana');
			window.location.assign('sarprasadm.php');
		</script>";
?>