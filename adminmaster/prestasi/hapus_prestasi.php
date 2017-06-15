<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from prestasi where npsn=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('prestasi_adm.php');

	</script>";
?>