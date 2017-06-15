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
    $query = "SELECT * FROM data_guru where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    
	$npsn=$_POST['npsn'];
  $tahun_ajaran=$_POST['tahun_ajaran'];
  $nbm=$_POST['nbm'];
  $nama_guru=$_POST['nama_guru'];
  $bidang=$_POST['bidang'];
  $nuptk=$_POST['nuptk'];
  $nip=$_POST['nip'];
  $tempat_lahir=$_POST['tempat_lahir'];
  $tgl_lahir=$_POST['tgl_lahir'];
  $telepon=$_POST['telepon'];
  $email=$_POST['email'];
  $pangkat_golruang=$_POST['pangkat_golruang'];
  $tgl_pengangkatan=$_POST['tgl_pengangkatan'];
  $sertifikasi_guru=$_POST['sertifikasi_guru'];
  $tmt_sertifikasi=$_POST['tmt_sertifikasi'];
  $jk=$_POST['jk'];
  $sts_pegawai=$_POST['sts_pegawai'];
  $organisasi=$_POST['organisasi'];
  $alamat=$_POST['alamat'];
  $rt_rw=$_POST['rt_rw'];
  $kelurahan=$_POST['kelurahan'];
  $kec=$_POST['kec'];
  $kab=$_POST['kab'];
  $prov=$_POST['prov'];
  $pendidikan=$_POST['pendidikan'];
  $jurusan=$_POST['jurusan'];
  $univ=$_POST['univ'];
  $thn_lulus=$_POST['thn_lulus'];
	
  mysql_query("UPDATE data_guru SET
    npsn='$npsn',
    tahun_ajaran='$tahun_ajaran',
    nbm='$nbm',
    nama_guru='$nama_guru',
    bidang='$bidang',
    nuptk='$nuptk',
    nip='$nip',
    tempat_lahir='$tempat_lahir',
    tgl_lahir='$tgl_lahir',
    telepon='$telepon',
    email='$email',
    pangkat_golruang='$pangkat_golruang',
    tgl_pengangkatan='$tgl_pengangkatan',
    sertifikasi_guru='$sertifikasi_guru',
    tmt_sertifikasi='$tmt_sertifikasi',
    jk='$jk',
    sts_pegawai='$sts_pegawai',
    organisasi='$organisasi',
    alamat='$alamat',
    rt_rw='$rt_rw',
    kelurahan='$kelurahan',
    kec='$kec',
    kab='$kab',
    prov='$prov',
    pendidikan='$pendidikan',
    jurusan='$jurusan',
    univ='$univ',
    thn_lulus='$thn_lulus'
    
     where npsn='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data Data Guru');
      window.location.assign('data_guru_adm.php');
		</script>";
?>
<!--
      window.location.assign('kepsekadm.php');