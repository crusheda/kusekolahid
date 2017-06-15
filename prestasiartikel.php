<?php  
    include "koneksi.php";
     $kunci=$_GET['id'];
    $sql=mysql_query("select * from berita_prestasi where id=$kunci");
   



    $berita = mysql_fetch_object($sql);
  
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Prestasi - kusekolah</title>

  <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link href='/img/twh.ico' rel='shortcut icon'>
  <link rel="icon" href="img/twh.ico" type="image/x-icon">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="semantic-ui/semantic.js"></script>
  <script src="homepage.js"></script>
   <script>
    $(function(){
        $('.ui.card').popup();
    });
    </script>
  </head>
  <body id="home">
  <div class="ui inverted masthead centered segment">
    <div class="ui page grid">
      <div class="column">
        
        <div class="ui secondary pointing menu">
          <a class="logo item" onclick="window.location.href='index.html'">
            kusekolah  </a>                
          <a class="item" onclick="window.location.href='datasekolah/userpage.php'">
            <i class="white flaticon-graduates" style="color: white"></i> Data Sekolah
          </a>
          <a class="item" onclick="window.location.href='dataguru/userpage.php'">
            <i class="white flaticon-graduates" style="color: white"></i> Data Guru
          </a>
          <a class="item" onclick="window.location.href='hubungikami.php'">
            <i class="white flaticon-mail" style="color: white"></i> Hubungi Kami
          </a>
          <div class="right menu">
            <a class="ui item" href="login.html" style="color: white" title="Login Ke Akun Anda">
              <i class="white flaticon-outcoming icon" style="color: white"></i><b>Login</b>
            </a>
          </div>
        </div> 
        <div class="ui hidden transition information">
          <h1 class="ui inverted centered header">
                Prestasi
          </h1>
            <p class="ui header" style="font-family: 'Segoe UI'; color: #fff; "> <?php echo $berita->judul;?> </p>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical feature segment">
    <div class="ui centered page grid">
      <div class="ui horizontal divider">
        <i class="black flaticon-outcoming icon"></i>
      </div>

      <div class="ui container" style="margin-top: 5px;">
  <div class="ui grid" style="background-color: #fff; padding: 20px">
    <div class="sixteen wide column">
      
      <center><img src="img/<?php echo $berita->foto;?>" style="width: 80%"></center>
      
      <h2 style="font-size: 20px; font-weight: 100"><?php echo $berita->paragraf1;?></h2>
      <h2 style="font-size: 20px; font-weight: 100"><?php echo $berita->paragraf2;?></h2>
     <h2 style="font-size: 20px; font-weight: 100"><?php echo $berita->paragraf3;?></h2>
    </div>
  </div>
</div>



    </div>
  </div>
    
  <div class="ui inverted footer segment center">
    <div class="ui container">
      <center><img src="img/twh.png" style="width: 40px;height: 40px"></center>
    </div>
      <center>
        <h4 class="ui inverted header">All Right Reserved<br><sub>Copyright 2017</sub></h4>
      </center>
  </div>
</body>
</html>
