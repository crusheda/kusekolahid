<?php
session_start();
if (isset($_SESSION['username'])) 
  {
    include "../koneksi.php";
    $query = "SELECT * FROM profil";
    $sql = mysql_query($query, $koneksi);
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

  <link rel="stylesheet" type="text/css" href="../semantic-ui/semantic.css">
  <link rel="stylesheet" type="text/css" href="../homepage.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/table.css">
  <link href='../img/twh.ico' rel='shortcut icon'>
  <link rel="icon" href="../img/twh.ico" type="image/x-icon">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="../semantic-ui/semantic.js"></script>
  <script src="../homepage.js"></script>
  <script>
    $(function(){
        $('.ui.card').popup();
    });
  </script>
  <style type="text/css">
    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        max-height: 500px;
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
          <a class="logo item" onclick="window.location.href='admpage.php'">
            kusekolah
          </a>
          <div class="ui inline dropdown">
            <a class="item" style="color: white">Data Pokok</a>
            <div class="menu">
              <div class="item" data-text="this week" onclick="window.location.href='kepsek/kepsekadm.php'">Kepsek</div>
              <div class="item" data-text="this week" onclick="window.location.href='wakasek/wakasekadm.php'">Wakasek</div>
              <div class="item" data-text="this week" onclick="window.location.href='data_guru/data_guru_adm.php'">Data Guru</div>
              <div class="item" data-text="this week" onclick="window.location.href='siswa/siswaadm.php'">Data Siswa</div>
            </div>
          </div> 
          <div class="ui inline dropdown">
              <a class="item" style="color: white">Data Sekolah</a>
              <div class="menu">
              <div class="item" data-text="this week" onclick="window.location.href='profil/profiladm.php'">Profil</div>
              <div class="item" data-text="this week" onclick="window.location.href='prestasi/prestasi_adm.php'">Prestasi</div>
              <div class="item" data-text="this week" onclick="window.location.href='jurusan/jurusan_adm.php'">Jurusan</div>
              <div class="item" data-text="this week" onclick="window.location.href='tenkependik/tenkependik_adm.php'">Tenkependik</div>
            </div>
          </div>             
          <div class="ui inline dropdown">
              <a class="item" style="color: white">Aset</a>
              <div class="menu">
              <div class="item" data-text="this week" onclick="window.location.href='aset_bangunan/aset_bangunan_adm.php'">Aset Bangunan</div>
              <div class="item" data-text="this week" onclick="window.location.href='aset_tanah/aset_tanah_adm.php'">Aset Tanah</div>
              <div class="item" data-text="this week" onclick="window.location.href='sarpras/sarprasadm.php'">Sarpras</div>
            </div>
          </div>
            <a class="item" href="user/user_adm.php">
            <i class="flaticon-star icon" style="color: white"></i>Data Admin
          </a>          
            <div class="right menu">
              <a class="ui item" href="" style="color: white" title="Admin Sekolah">
                <i class="flaticon-outcoming icon" style="color: white"></i>
                <b>Welcome : <?php echo "".$_SESSION['username'];?></b>
              </a>
              <a class="ui item" href="../logout.php" style="color: white" title="Logout Akun">
                <b>| Logout |</b>
              </a>
            </div>
          </div>
                     
          <div class="ui hidden transition information">
            <h1 class="ui inverted centered header">
                  Hello!
                  <h2><u><?php echo "".$_SESSION['username'];?></u></h2>
            </h1>
              <p class="ui centered lead">Kelola Data Sekolah Anda<br>Sekarang Juga..</p>
            <br>
          </div>
        </div>  
      </div>
    </div>
  </div>

  <!-- Isi Body -->
  <div class="ui horizontal divider"></div>
  <div class="ui container">
  <div class="ui icon input">
    <input type="text" id="inputsearch" onkeyup="fungsisearch()" placeholder="Cari npsn.." title="Tulis npsn disini">
    <i class="flaticon-move link icon"></i>
  </div>
  <br><br>
    <div class="scrollmenu">
      <table class="ui selectable celled table" id="tabeladm">
        <thead>
        <tr>
          <th>NPSN</th>
          <th>Alamat</th>
          <th>Telepon</th>
          <th>E-mail</th>
          <th>Website</th>
        </tr>
        </thead>
        <tbody>
          <?php while($data = mysql_fetch_object($sql)): ?>
        <tr>
          <td><?php echo $data->npsn;?></td>
          <td><?php echo $data->alamat;?></td>
          <td><?php echo $data->telepon;?></td>
          <td><?php echo $data->email;?></td>
          <td><?php echo $data->web;?></td>
        </tr>
          <?php 

          endwhile;?>
        </tbody>        
      </table>
    </div>
  </div>
  <script>
    function fungsisearch() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("inputsearch");
      filter = input.value.toUpperCase();
      table = document.getElementById("tabeladm");
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
      <center><img src="../img/twh.png" style="width: 40px;height: 40px"></center>
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
      window.location.assign('../login.html');
      </script>
      <?php
    }
?>