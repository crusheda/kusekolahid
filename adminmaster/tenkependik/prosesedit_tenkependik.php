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
    $query = "SELECT * FROM tenkependik where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    
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
	
  mysql_query("UPDATE  tenkependik SET
    npsn='$npsn',
    tahun_ajaran='$tahun_ajaran',
    nbm='$nbm',
    jabatan='$jabatan',
    nama='$nama',
    nip='$nip',
    tempat_lhr='$tempat_lhr',
    tgl_lhr='$tgl_lhr',
    telepon='$telepon',
    email='$email',
    pangkat='$pangkat',
    tgl_pengangkatan='$tgl_pengangkatan',
    jk='$jk',
    status_pegawai='$status_pegawai',
    organisasi='$organisasi',
    alamat='$alamat',
    rt_rw='$rt_rw',
    kel='$kel',
    kec='$kec',
    kab='$kab',
    prov='$prov',
    pnd_thr='$pnd_thr'
     where npsn='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data Tenkependik');
      window.location.assign('tenkependik_adm.php');
		</script>";
?>
<!--
      window.location.assign('kepsekadm.php');