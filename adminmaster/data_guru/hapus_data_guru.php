<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from data_guru where npsn=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('data_guru_adm.php');

	</script>";
?>