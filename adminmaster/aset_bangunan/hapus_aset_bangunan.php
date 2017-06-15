<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from aset_bangunan where npsn=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('aset_bangunan_adm.php');

	</script>";
?>