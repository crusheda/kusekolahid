<?php
session_start();
if (isset($_SESSION['username'])) 
  {
    include "../../koneksi.php";
    $query = "SELECT * FROM profil";
    $sql = mysql_query($query, $koneksi);
    $jumlah_baris = mysql_num_rows($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Master - kusekolah</title>

  <link rel="stylesheet" type="text/css" href="../../semantic-ui/semantic.css">
  <link rel="stylesheet" type="text/css" href="../../homepage.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../../iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/table.css">
  <link href='../../img/twh.ico' rel='shortcut icon'>
  <link rel="icon" href="../../img/twh.ico" type="image/x-icon">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="../../semantic-ui/semantic.js"></script>
  <script src="../../homepage.js"></script>
  <script>
    $(function(){
        $('.ui.card').popup();
    });
  </script>
  <style type="text/css">
    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #777;
    }
  </style>
  
  </head>
  <body id="home">
  <div class="ui inverted masthead centered segment">
    <div class="ui page grid">
      <div class="column">
        <div class="ui secondary pointing menu">
          <a class="logo item" onclick="window.location.href='../../index.php'">
            kusekolah
          </a>
          <div class="ui inline dropdown">
            <a class="item" style="color: white">Data Pokok</a>
            <div class="menu">
              <div class="item" data-text="this week" onclick="window.location.href='../kepsek/kepsekadm.php'">Kepsek</div>
              <div class="item" data-text="this week" onclick="window.location.href='../wakasek/wakasekadm.php'">Wakasek</div>
              <div class="item" data-text="this week" onclick="window.location.href='../data_guru/data_guru_adm.php'">Data Guru</div>
              <div class="item" data-text="this week" onclick="window.location.href='../siswa/siswaadm.php'">Data Siswa</div>
            </div>
          </div> 
          <div class="ui inline dropdown">
              <a class="item" style="color: white">Data Sekolah</a>
              <div class="menu">
              <div class="item" data-text="this week" onclick="window.location.href='../profil/profiladm.php'">Profil</div>
              <div class="item" data-text="this week" onclick="window.location.href='../prestasi/prestasi_adm.php'">Prestasi</div>
              <div class="item" data-text="this week" onclick="window.location.href='../jurusan/jurusan_adm.php'">Jurusan</div>
              <div class="item" data-text="this week" onclick="window.location.href='../tenkependik/tenkependik_adm.php'">Tenkependik</div>
            </div>
          </div>             
          <div class="ui inline dropdown">
              <a class="item" style="color: white">Aset</a>
              <div class="menu">
              <div class="item" data-text="this week" onclick="window.location.href='../aset_bangunan/aset_bangunan_adm.php'">Aset Bangunan</div>
              <div class="item" data-text="this week" onclick="window.location.href='../aset_tanah/aset_tanah_adm.php'">Aset Tanah</div>
              <div class="item" data-text="this week" onclick="window.location.href='../sarpras/sarprasadm.php'">Sarpras</div>
            </div>
          </div>
          <a class="item" href="../user/user_adm.php">
            <i class="flaticon-star icon" style="color: white"></i>Data Admin
          </a>          
          <div class="right menu">
            <a class="ui item" href="" style="color: white" title="Admin Sekolah">
              <i class="flaticon-outcoming icon" style="color: white"></i>
              <b>Welcome : <?php echo "".$_SESSION['username'];?></b>
            </a>
            <a class="ui item" href="../../logout.php" style="color: white" title="Logout Akun">
              <b>| Logout |</b>
            </a>
          </div>
                     
          <div class="ui hidden transition information">
            <h1 class="ui inverted centered header">
                  
                  <h2><u>Mengelola Data Profil</u></h2>
            </h1>
            <br>
          </div>
        </div>  
      </div>
    </div>
  </div>

  <!-- Isi Body -->
  <br>
  <div class="ui horizontal divider"><a>Profil Sekolah</a></div>
  <div class="ui container">
  <div class="ui icon input">
    <input type="text" id="inputsearch" onkeyup="fungsisearch()" placeholder="Cari npsn.." title="Tulis npsn disini">
    <i class="flaticon-move link icon"></i>
  </div>
    <div class="ui mini horizontal menu">
      <a class="item" style="color: black" href="addprofil.php">
        Tambah Data      
      </a>
      <a class="item" style="color: black;font-family: Roboto">
        <?php echo "Jumlah Data : ".$jumlah_baris;?>
      </a>
      <a class="right menu item">        
        <p style="font-family: Roboto">(+) Data ditampilkan per 10 Data.</p>
      </a>
      
    </div>
  </div>
  <br>
  
  <?php
    $dbhost   = "209.58.165.153"; // nama server
    $dbuser   = "kusk7157_dapodik"; // user database
    $dbpass   = "pw2dapodik"; //password database
    $batas    = 10;
     
    $koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $koneksi )
    {
      die('Gagal Koneksi: ' . mysql_error());
    }
    mysql_select_db('dapodik');
    /* Get total number of records */
    $sql = "SELECT count(npsn) FROM profil ";
    $ambildata = mysql_query( $sql, $koneksi );
    if(! $ambildata )
    {
      die('Gagal Ambil Data: ' . mysql_error());
    }
    $row = mysql_fetch_array($ambildata, MYSQL_NUM );
    $hitung = $row[0];
     
    if( isset($_GET{'page'} ) )
    {
       $page = $_GET{'page'} + 1;
       $offset = $batas * $page ;
    }
    else
    {
       $page = 0;
       $offset = 0;
    }
    $left_rec = $hitung - ($page * $batas);
     
    $sql = "SELECT *".
           "FROM profil ".
           "LIMIT $offset, $batas";
     
    $ambildata = mysql_query( $sql, $koneksi );
    if(! $ambildata )
    {
      die('Gagal Ambil Data: ' . mysql_error());
    }
    
        ?>
        <!--ScrollMenu!-->
        <div class="ui container">
        <div class="scrollmenu">
          <table class="ui selectable celled table" id="tabel_profil" style="scroll-behavior: 2">
            <thead>
            <tr>
              <th><center>NPSN</center></th>
              <th><center>Jenjang</center></th>
              <th><center>Nama Sekolah</center></th>
              <th><center>SK Pendirian</center></th>
              <th><center>Tanggal Pendirian</center></th>
              <th><center>Alamat</center></th>
              <th><center>Kelurahan</center></th>
              <th><center>Kecamatan</center></th>
              <th><center>Kabupaten</center></th>
              <th><center>Telepon</center></th>
              <th><center>Email</center></th>
              <th><center>Alamat Website</center></th>
              <th><center>Akreditasi</center></th>
              <th><center>SK Akreditasi</center></th>
              <th><center>Kurikulum</center></th>
              <th><center>Visi</center></th>
              <th><center>Misi</center></th>
              <th><center>Tujuan</center></th>
              <th><center>Moto</center></th>
              <th><center>Koordinat Longitude</center></th>
              <th><center>Koordinat Latitude</center></th>
              <th><center>Listrik</center></th>
              <th><center>Akses Internet</center></th>
              <th><center>Edit</center></th>
              <th><center>Hapus</center></th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($row = mysql_fetch_array($ambildata)): ?>
          
            <tr>
              <td><?php echo "{$row['npsn']}"?></td>
              <td><?php echo "{$row['jenjang']}"?></td>
              <td><?php echo "{$row['nama_sekolah']}"?></td>
              <td><?php echo "{$row['sk_pendirian']}"?></td>
              <td><?php echo "{$row['tgl_pendirian']}"?></td>
              <td><?php echo "{$row['alamat']}"?></td>
              <td><?php echo "{$row['kel']}"?></td>
              <td><?php echo "{$row['kec']}"?></td>
              <td><?php echo "{$row['kab']}"?></td>
              <td><?php echo "{$row['telepon']}"?></td>
              <td><?php echo "{$row['email']}"?></td>
              <td><?php echo "{$row['web']}"?></td>
              <td><?php echo "{$row['akreditasi']}"?></td>
              <td><?php echo "{$row['sk_akreditasi']}"?></td>
              <td><?php echo "{$row['kurikulum']}"?></td>
              <td><?php echo "{$row['visi']}"?></td>
              <td><?php echo "{$row['misi']}"?></td>
              <td><?php echo "{$row['tujuan']}"?></td>
              <td><?php echo "{$row['moto']}"?></td>
              <td><?php echo "{$row['koordinat_long']}"?></td>
              <td><?php echo "{$row['koordinat_lat']}"?></td>
              <td><?php echo "{$row['listrik']}"?></td>
              <td><?php echo "{$row['akses_internet']}"?></td>
              <td>  
                <center><button class="ui icon blue button" onclick="window.location.href='editprofil.php?npsn= <?php echo "{$row['npsn']}"?>'">
                </button></center>
              </td> 
              <td>  
                <center><button class="ui icon red button" onclick="window.location.href='hapusprofil.php?npsn= <?php echo "{$row['npsn']}"?>'">
                </button></center>
              </td> 
            </tr>
            <?php 

              endwhile;?>
            </tbody>
            </table>
          <!--ScrollMenu!-->
          </div>
          <!--ScrollMenu!-->
        </div>
      <center>
      <div class="ui container">
        <div class="ui mini horizontal menu">
        <a class="right menu item">
          <button class=" ui simple small blue button" onclick="window.location.href='profiladm.php?page=$page'"><b>Next Data</b>
          </button>
        </a>
        <?php 
        if( $page > 0 )
        {
           $last = $page - 2;
           echo "<br>";
           echo "<a class=\"left menu item\"><button class=\" ui simple small blue button \" onclick=\"window.location.href='profiladm.php?page=$last'\"><b>Previous Data<b></button></a>";

           echo "<a class=\"right menu item\"><button class=\" ui simple small blue button \" onclick=\"window.location.href='profiladm.php?page=$page'\"><b>Next Data</b></button></a>";
        }
        else if( $page == 0 )
        {
           echo "<a class=\"right menu item\"><button class=\" ui simple small blue button \" onclick=\"window.location.href='profiladm.php?page=$page'\"><b>Next Data</b></button></a>";
        }
        else if( $left_rec < $batas )
        {
           $last = $page - 2;
           echo "<a class=\"left menu item\"><button class=\" ui simple small blue button \" onclick=\"window.location.href='profiladm.php?page=$last'\"><b>Previous Data</b></button></a>";
        }
        ?>
      </div>
    </div>
    <br>
    </center>

    <script>
    function fungsisearch() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("inputsearch");
      filter = input.value.toUpperCase();
      table = document.getElementById("tabel_profil");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
    </script>
    
  <div class="ui inverted footer segment center">
    <div class="ui container">
      <center><img src="../../img/twh.png" style="width: 40px;height: 40px"></center>
    </div>
      <center>
        <h4 class="ui inverted header">All Right Reserved<br><sub>Copyright 2017</sub></h4>
      </center>
  </div>
</body>
</html>
<?php
  }else
    {
      ?>
      <script>alert('Anda Perlu Login Ke Akun Anda.');
      window.location.assign('../../login.html');
      </script>
      <?php
    }
?>