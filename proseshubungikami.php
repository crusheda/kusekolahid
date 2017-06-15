<?php
// terima data input dari user
// $judul=$_POST['subjek'];
// $nama=$_POST['nama'];
// $email=$_POST['email'];
// $pesan=$_POST['pesan'];

//konfigurasi kiriman
$to="thecrusheda@gmail.com";
$subjek="Subjek: Hallo";
$from="From: Muhammad Fauzan &lt;mfauzan.albaihaqi@gmail.com&gt;";
$pesan="Hallo gengs";
 
//kirimkan ke email admin
@ mail($to, $subjek, $pesan, $from);
// echo "Pesan berhasil terkirim.
// window.location.assign('hubungikami.php')";
?>