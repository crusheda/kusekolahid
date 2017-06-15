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
    $query = "SELECT * FROM data_guru";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$npsn=$_POST['npsn'];
	$tahun_ajaran=$_POST['tahun_ajaran'];
	$nbm=$_POST['nbm'];
	$nama_guru=$_POST['nama_guru'];
  $bidang=$_POST['bidang'];
  $nuptk=$_POST['nuptk'];
  $nip=$_POST['nip'];
  $tempat_lahir=$_POST['tempat_lahir'];
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

	
$query=mysql_query("insert into data_guru (
    npsn,
    tahun_ajaran,
    nbm,
    nama_guru,
    bidang,
    nuptk,
    nip,
    tempat_lahir,
    telepon,
    email,
    pangkat_golruang,
    tgl_pengangkatan,
    sertifikasi_guru,
    tmt_sertifikasi,
    jk,
    sts_pegawai,
    organisasi,
    alamat,
    rt_rw,
    kelurahan,
    kec,
    kab,
    prov,
    pendidikan,
    jurusan,
    univ,
    thn_lulus) 
		
    values(
    '$npsn',
    '$tahun_ajaran',
    '$nbm',
    '$nama_guru',
    '$bidang',
    '$nuptk',
    '$nip',
    '$tempat_lahir',
    '$telepon',
    '$email',
    '$pangkat_golruang',
    '$tgl_pengangkatan',
    '$sertifikasi_guru',
    '$tmt_sertifikasi',
    '$jk',
    '$sts_pegawai',
    '$organisasi',
    '$alamat',
    '$rt_rw',
    '$kelurahan',
    '$kec',
    '$kab',
    '$prov',
    '$pendidikan',
    '$jurusan',
    '$univ',
    '$thn_lulus')");

	echo "<script>
			alert('Berhasil menambahkan data data_guru');
			window.location.assign('data_guru_adm.php');
		</script>";
?>