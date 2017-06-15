<?php
    include "../koneksi.php";
    $query = "SELECT * FROM kabupaten";
    $sql = mysql_query($query, $koneksi);
    $jumlah_baris = mysql_num_rows($sql);

    $sql2 = "SELECT jenjang FROM profil group by jenjang";
    $query2 = mysql_query($sql2);
    $count = mysql_num_rows($query2);
?><!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Data Sekolah - kusekolah</title>

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
        /*max-height: 500px;*/
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
          <a class="logo item" onclick="window.location.href='../index.php'">
            kusekolah  </a>                
          <a class="item" onclick="window.location.href='../datasekolah/userpage.php'">
            <i class="flaticon-graduates icon" style="color: white"></i> Data Sekolah
          </a>
          <a class="item" onclick="window.location.href='../dataguru/userpage.php'">
            <i class="flaticon-graduates icon" style="color: white"></i> Data Guru
          </a>
          <a class="item" onclick="window.location.href='../hubungikami.php'">
            <i class="flaticon-mail" style="color: white"></i> Hubungi Kami
          </a>
          <div class="right menu">
            <a class="ui item" href="../login.html" style="color: white" title="Login Ke Akun Anda">
              <i class="white flaticon-outcoming icon" style="color: white"></i><b>Login</b>
            </a>
          </div>
        </div>
                     
        <div class="ui hidden transition information">
          <h1 class="ui centered lead">Informasi Data Guru</h1>
          <br>
        </div>
      </div>  
    </div>
  </div>
  <br>
  <!-- Isi Body -->
  <div class="ui horizontal divider"><a>KABUPATEN</a></div>
  <div class="ui container">
    <div class="ui mini horizontal menu">
      <a class="item" style="color: black;font-family: Roboto">
        <?php echo "Jumlah Data : ".$jumlah_baris;?>
      </a>
      
    </div>
  </div>
  <br>

  <!--ScrollMenu!-->
  <div class="ui container">
    <div class="scrollmenu">
      <table class="ui selectable celled table">
        <thead>
        <tr>
          <th>No</th>
          <th>Kabupaten</th>
          <th>Jumlah</th>
        </tr>
        </thead>
        <tbody>
          <?php while($data = mysql_fetch_object($sql)): ?>
        <tr>
          <td><a style="color: black" class="ui button" onclick="window.location.href='userkecpage.php?id= <?php echo $data->id;?>'"><?php echo $data->id;?></a></td>
          <td><?php echo $data->kabupaten;?></td>
          <td><?php echo $count;?></td>
        </tr>
          <?php 

          endwhile;?>
        </tbody>        
      </table>
    </div>
  </div>

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
