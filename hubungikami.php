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
            <i class="flaticon-graduates icon" style="color: white"></i> Data Sekolah
          </a>
          <a class="item" onclick="window.location.href='dataguru/userpage.php'">
            <i class="flaticon-graduates icon" style="color: white"></i> Data Guru
          </a>
          <a class="item">
            <i class="flaticon-mail" style="color: white"></i> Hubungi Kami
          </a>
          <div class="right menu">
            <a class="ui item" href="login.html" style="color: white" title="Login Ke Akun Anda">
              <i class="white flaticon-outcoming icon" style="color: white"></i><b>Login</b>
            </a>
          </div>
        </div>
                   
        <div class="ui hidden transition information">
          <h1 class="ui inverted centered header">
                Hubungi Kami
          </h1>
            <p class="ui centered lead">Hubungi Kami Bila Anda Mendapat Kesulitan</p>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical feature segment">
    <div class="ui centered page grid">
    <div class="ui horizontal divider">
      <i class="flaticon-mail icon"></i>
    </div>
      <form action='proseshubungikami.php' method="post">
        <div class="ui input focus">
          <input type="text" name="judul" placeholder="Judul..." style="width: 460px">
        </div>
        <br>
        <div class="ui horizontal divider"></div>
        <div class="ui input focus">
          <input type="text" name="nama" placeholder="Nama..." style="width: 460px">
        </div>
        <br>
        <div class="ui horizontal divider"></div>
        <div class="ui input focus">
          <input type="text" name="email" placeholder="Email..." style="width: 460px">
        </div>
        <br>
        <div class="ui horizontal divider"></div>
        <div class="ui input focus">
          <textarea id="output" name=’pesan’ cols=’10′ rows=’5′ style="width: 460px;height: 135px" placeholder="Tulis Pesan Anda Disini"></textarea>
        </div>
        <br>  
        <div class="ui small blue red button" value="Clear" onclick="javascript:eraseText();"> 
          <a style="color: white">Reset</a>
        </div>
        <div class="ui large blue submit disabled button">
          <a style="color: black">Kirim</a>
        </div>
      </form>
    </div>
  </div>
  
  <script type="text/javascript">
    function eraseText() {
    document.getElementById("output").value = "";
    }
  </script>
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
