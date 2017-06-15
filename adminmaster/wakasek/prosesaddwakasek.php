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
    $query = "SELECT * FROM wakasek";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$npsn=$_POST['npsn'];
	$tahun_ajaran=$_POST['tahun_ajaran'];
	$nbm=$_POST['nbm'];
	$wakil_kepala=$_POST['wakil_kepala'];
  $waka_bidang=$_POST['waka_bidang'];
  $sk_pengangkatan=$_POST['sk_pengangkatan'];
  $tgl_sk=$_POST['tgl_sk'];
  $asal_sk=$_POST['asal_sk'];
  $tmt_jabatan=$_POST['tmt_jabatan'];
  $masa_tugaske=$_POST['masa_tugaske'];
  $tgl_habis=$_POST['tgl_habis'];
	
$query=mysql_query("insert into wakasek (
    npsn,
    tahun_ajaran,
    nbm,
    wakil_kepala,
    waka_bidang,
    sk_pengangkatan,
    tgl_sk,
    asal_sk,
    tmt_jabatan,
    masa_tugaske,
    tgl_habis) 
		
    values(
    '$npsn',
    '$tahun_ajaran',
    '$nbm',
    '$wakil_kepala',
    '$waka_bidang',
    '$sk_pengangkatan',
    '$tgl_sk',
    '$asal_sk',
    '$tmt_jabatan',
    '$masa_tugaske',
    '$tgl_habis')");

	echo "<script>
			alert('Berhasil menambahkan data wakasek');
			window.location.assign('wakasekadm.php');
		</script>";
?>