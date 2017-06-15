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
    $query = "SELECT * FROM tenkependik";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$npsn=$_POST['npsn'];
	$tahun_ajaran=$_POST['tahun_ajaran'];
	$nbm=$_POST['nbm'];
	$jabatan=$_POST['jabatan'];
  $nama=$_POST['nama'];
  $nip=$_POST['nip'];
  $tempat_lhr=$_POST['tempat_lhr'];
  $tgl_lhr=$_POST['tgl_lhr'];
  $telepon=$_POST['telepon'];
  $email=$_POST['email'];
  $pangkat=$_POST['pangkat'];
  $tgl_pengangkatan=$_POST['tgl_pengangkatan'];
  $jk=$_POST['jk'];
  $status_pegawai=$_POST['status_pegawai'];
  $organisasi=$_POST['organisasi'];
  $alamat=$_POST['alamat'];
  $rt_rw=$_POST['rt_rw'];
  $kel=$_POST['kel'];
  $kec=$_POST['kec'];
  $kab=$_POST['kab'];
  $prov=$_POST['prov'];
  $pnd_thr=$_POST['pnd_thr'];
	
$query=mysql_query("insert into tenkependik (
    npsn,
    tahun_ajaran,
    nbm,
    jabatan,
    nama,
    nip,
    tempat_lhr,
    tgl_lhr,
    telepon,
    email,
    pangkat,
    tgl_pengangkatan,
    jk,
    status_pegawai,
    organisasi,
    alamat,
    rt_rw,
    kel,
    kec,
    kab,
    prov,
    pnd_thr) 
		
    values(
    '$npsn',
    '$tahun_ajaran',
    '$nbm',
    '$jabatan',
    '$nama',
    '$nip',
    '$tempat_lhr',
    '$tgl_lhr',
    '$telepon',
    '$email',
    '$pangkat',
    '$tgl_pengangkatan',
    '$jk',
    '$status_pegawai',
    '$organisasi',
    '$alamat',
    '$rt_rw',
    '$kel',
    '$kec',
    '$kab',
    '$prov',
    '$pnd_thr'
    )");

	echo "<script>
			alert('Berhasil menambahkan data tenkependik');
			window.location.assign('tenkependik_adm.php');
		</script>";
?>