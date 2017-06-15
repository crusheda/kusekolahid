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
    $query = "SELECT * FROM kepsek";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$npsn=$_POST['npsn'];
  $no_persil=$_POST['no_persil'];
  $kepemilikan=$_POST['kepemilikan'];
  $atasnama_sertifikat=$_POST['atasnama_sertifikat'];
  $status_tanah=$_POST['status_tanah'];
  $luas_tanah=$_POST['luas_tanah'];
  $no_sertifikat=$_POST['no_sertifikat'];
  $tgl_sertifikat=$_POST['tgl_sertifikat'];
  $thn_perolehan=$_POST['thn_perolehan'];
  $harga_perolehan=$_POST['harga_perolehan'];
  $asal_usul=$_POST['asal_usul'];
  $letak=$_POST['letak'];
  $peruntukan=$_POST['peruntukan'];
	
	$query=mysql_query("insert into aset_tanah (
    npsn,
    no_persil,
    kepemilikan,
    atasnama_sertifikat,
    status_tanah,
    luas_tanah,
    no_sertifikat,
    tgl_sertifikat,
    thn_perolehan,
    harga_perolehan,
    asal_usul,
    letak,
    peruntukan) 
		
    values(
    '$npsn',
    '$no_persil',
    '$kepemilikan',
    '$atasnama_sertifikat',
    '$status_tanah',
    '$luas_tanah',
    '$no_sertifikat',
    '$tgl_sertifikat',
    '$thn_perolehan',
    '$harga_perolehan',
    '$asal_usul',
    '$letak',
    '$peruntukan')");
	echo "<script>
			alert('Berhasil menambahkan data Aset Tanah');
			window.location.assign('aset_tanah_adm.php');
		</script>";
?>