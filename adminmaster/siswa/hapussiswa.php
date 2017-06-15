<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from siswa where npsn=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('siswaadm.php');

	</script>";
?>