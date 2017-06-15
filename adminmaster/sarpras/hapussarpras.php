<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from sarpras where npsn=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('sarprasadm.php');

	</script>";
?>