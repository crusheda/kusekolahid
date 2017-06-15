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
    $query = "SELECT * FROM profil where npsn='$kunci'";
    $sql = mysql_query($query, $konek);
    
  $npsn=$_POST['npsn'];
  $jenjang=$_POST['jenjang'];
  $nama_sekolah=$_POST['nama_sekolah'];
  $sk_pendirian=$_POST['sk_pendirian'];
  $tgl_pendirian=$_POST['tgl_pendirian'];
  $alamat=$_POST['alamat'];
  $kel=$_POST['kel'];
  $kec=$_POST['kec'];
  $kab=$_POST['kab'];
  $telepon=$_POST['telepon'];
  $email=$_POST['email'];
  $web=$_POST['web'];
  $akreditasi=$_POST['akreditasi'];
  $sk_akreditasi=$_POST['sk_akreditasi'];
  $kurikulum=$_POST['kurikulum'];
  $visi=$_POST['visi'];
  $misi=$_POST['misi'];
  $tujuan=$_POST['tujuan'];
  $moto=$_POST['moto'];
  $koordinat_long=$_POST['koordinat_long'];
  $koordinat_lat=$_POST['koordinat_lat'];
  $listrik=$_POST['listrik'];
  $akses_internet=$_POST['akses_internet'];

  mysql_query("UPDATE profil SET
    npsn='$npsn',
    jenjang='$jenjang',
    nama_sekolah='$nama_sekolah',
    sk_pendirian='$sk_pendirian',
    tgl_pendirian='$tgl_pendirian',
    alamat='$alamat',
    kel='$kel',
    kec='$kec',
    kab='$kab',
    telepon='$telepon',
    email='$email',
    web='$web',
    akreditasi='$akreditasi',
    sk_akreditasi='$sk_akreditasi',
    kurikulum='$kurikulum',
    visi='$visi',
    misi='$misi',
    tujuan='$tujuan',
    moto='$moto',
    koordinat_long='$koordinat_long',
    koordinat_lat='$koordinat_lat',
    listrik='$listrik',
    akses_internet='$akses_internet'
    
     where npsn='$kunci'");
  echo "<script>
      alert('Berhasil mengedit data Profil Sekolah');
      window.location.assign('profiladm.php');
    </script>";
?>
<!--
      window.location.assign('kepsekadm.php');