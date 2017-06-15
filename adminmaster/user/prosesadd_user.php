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
    $query = "SELECT * FROM user";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$Nama=$_POST['Nama'];
  $level=$_POST['level'];
  $Foto=$_POST['Foto'];
 
	
$query=mysql_query("insert into user (
    username,
    email,
    password,
    Nama,
    level,
    Foto) 
		
    values(
    '$username',
    '$email',
    md5('$password'),
    '$Nama',
    '$level',
    '$Foto')");

	echo "<script>
			alert('Berhasil menambahkan data user');
			window.location.assign('user_adm.php');
		</script>";
?>