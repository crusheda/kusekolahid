<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from jurusan where npsn=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('jurusan_adm.php');

	</script>";
?>