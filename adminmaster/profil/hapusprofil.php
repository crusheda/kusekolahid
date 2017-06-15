<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from profil where npsn=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('profiladm.php');

	</script>";
?>