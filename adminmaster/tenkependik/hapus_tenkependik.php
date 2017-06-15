<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from tenkependik where npsn=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('tenkependik_adm.php');

	</script>";
?>