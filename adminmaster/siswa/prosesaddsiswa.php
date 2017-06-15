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
    $query = "SELECT * FROM siswa";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$npsn              =$_POST['npsn'];
	$tahun_ajaran      =$_POST['tahun_ajaran'];
	$kelas             =$_POST['kelas'];
	$jurusan           =$_POST['jurusan'];
  $rombel            =$_POST['rombel'];
  $jumlah_putra      =$_POST['jumlah_putra'];
  $jumlah_putri      =$_POST['jumlah_putri'];
  $kms               =$_POST['kms'];
  $non_kms           =$_POST['non_kms'];
  $jumlah_siswa      =$_POST['jumlah_siswa'];
	
	$query=mysql_query("insert into siswa (
    npsn,
    tahun_ajaran,
    kelas,
    jurusan,
    rombel,
    jumlah_putra,
    jumlah_putri,
    kms,
    non_kms,
    jumlah_siswa) 
		
    values(
    '$npsn',
    '$tahun_ajaran',
    '$kelas',
    '$jurusan',
    '$rombel',
    '$jumlah_putra',
    '$jumlah_putri',
    '$kms',
    '$non_kms',
    '$jumlah_siswa')");
	echo "<script>
			alert('Berhasil menambahkan data Siswa');
			window.location.assign('siswaadm.php');
		</script>";
?>