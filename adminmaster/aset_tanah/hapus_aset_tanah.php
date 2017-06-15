<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from aset_tanah where npsn=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('aset_tanah_adm.php');

	</script>";
?>