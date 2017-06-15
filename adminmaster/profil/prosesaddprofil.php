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
    $query = "SELECT * FROM profil";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

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
  
$query=mysql_query("insert into profil (
    npsn,
    jenjang,
    nama_sekolah,
    sk_pendirian,
    tgl_pendirian,
    alamat,
    kel,
    kec,
    kab,
    telepon,
    email,
    web,
    akreditasi,
    sk_akreditasi,
    kurikulum,
    visi,
    misi,
    tujuan,
    moto,
    koordinat_long,
    koordinat_lat,
    listrik,
    akses_internet) 
    
    values(
    '$npsn',
    '$jenjang',
    '$nama_sekolah',
    '$sk_pendirian',
    '$tgl_pendirian',
    '$alamat',
    '$kel',
    '$kec',
    '$kab',
    '$telepon',
    '$email',
    '$web',
    '$akreditasi',
    '$sk_akreditasi',
    '$kurikulum',
    '$visi',
    '$misi',
    '$tujuan',
    '$moto',
    '$koordinat_long',
    '$koordinat_lat',
    '$listrik',
    '$akses_internet')");

  echo "<script>
      alert('Berhasil menambahkan data profil');
      window.location.assign('profiladm.php');
    </script>";
?>