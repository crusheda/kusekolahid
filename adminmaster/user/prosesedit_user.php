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
    $kunci=$_POST['id'];
    $query = "SELECT * FROM user where id='$kunci'";
    $sql = mysql_query($query, $konek);
    
	$username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $Nama=$_POST['Nama'];
  $level=$_POST['level'];
  $Foto=$_POST['Foto'];
	
  mysql_query("UPDATE  user SET
    username='$username',
    email='$email',
    password=md5('$password'),
    Nama='$Nama',
    level='$level'
     where id='$kunci'");
	echo "<script>
			alert('Berhasil mengedit data User');
      window.location.assign('user_adm.php');
		</script>";
?>
<!--
      window.location.assign('kepsekadm.php');