<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from wakasek where npsn=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('wakasekadm.php');

	</script>";
?>