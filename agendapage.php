<?php  
    include "koneksi.php";
   
    $sql=mysql_query("select * from berita_agenda where id=1;");
    $berita1 = mysql_fetch_object($sql);

    $sql2=mysql_query("select * from berita_agenda where id=2;");
    $berita2 = mysql_fetch_object($sql2);

    $sql3=mysql_query("select * from berita_agenda where id=3;");
    $berita3 = mysql_fetch_object($sql3);

    $sql4=mysql_query("select * from berita_agenda where id=4;");
    $berita4 = mysql_fetch_object($sql4);

    $sql5=mysql_query("select * from berita_agenda where id=5;");
    $berita5 = mysql_fetch_object($sql5);

    $sql6=mysql_query("select * from berita_agenda where id=6;");
    $berita6 = mysql_fetch_object($sql6);

  
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Event - kusekolah</title>

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
          <a class="item" onclick="window.location.href='hubungikami.php'">
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
                Event
          </h1>
            <p class="ui centered lead">Event dan juga Agenda dari <br>berbagai sekolah.</p>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical feature segment">
    <div class="ui very relaxed stackable centered page grid">
      <div class="ui horizontal divider">
        <i class="calendar icon"></i>
      </div> 

      <div class="fourteen wide column">
      <div class="ui three column aligned stackable divided grid">

        <div class="column">
          <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
            <div class="image">
              <img src="img/<?php echo $berita1->foto;?>">
            </div>
            <div class="content">
              <div class="header"><?php echo $berita1->judul;?></div>
            <div class="description">
                <?php echo $berita1->desk;?>
              </div>

            </div>
            <div class="ui blue button" onclick="window.location.href='agendaartikel.php?id= <?php echo $berita1->id;?>'">
                <i class="flaticon-outcoming icon"></i>
                Lihat
              </div>  
          </div>
        </div>
          
        <div class="column">
          <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
            <div class="image">
              <img src="img/<?php echo $berita2->foto;?>">
            </div>
            <div class="content">
              <div class="header"><?php echo $berita2->judul;?></div>
              <div class="description">
                <?php echo $berita2->desk;?>
              </div>
            </div>
               <div class="ui blue button" onclick="window.location.href='agendaartikel.php?id=<?php echo $berita2->id;?>'">
                <i class="flaticon-outcoming icon"></i>
                Lihat
               </div>  
          </div>
        </div>

        <div class="column">
          <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
            <div class="image">
              <img src="img/<?php echo $berita3->foto;?>">
            </div>
            <div class="content">
              <div class="header"><?php echo $berita3->judul;?></div>
              <div class="description">
                <?php echo $berita3->desk;?>
              </div>
            </div>
               <div class="ui blue button" onclick="window.location.href='agendaartikel.php?id=<?php echo $berita3->id;?>'">
                <i class="flaticon-outcoming icon"></i>
                Lihat
              </div>  
          </div>
        </div>
      </div>
      </div>

      <div class="fourteen wide column">
      <div class="ui three column aligned stackable divided grid">

        <div class="column">
          <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
            <div class="image">
              <img src="img/<?php echo $berita4->foto;?>">
            </div>
            <div class="content">
              <div class="header"><?php echo $berita4->judul;?></div>
              <div class="description">
                <?php echo $berita4->desk;?>
              </div>
            </div>
               <div class="ui blue button" onclick="window.location.href='agendaartikel.php?id=<?php echo $berita4->id;?>'">
                <i class="flaticon-outcoming icon"></i>
                Lihat
              </div>              
          </div>
        </div>
          
        <div class="column">
          <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
            <div class="image">
              <img src="img/<?php echo $berita5->foto;?>">
            </div>
            <div class="content">
              <div class="header"><?php echo $berita5->judul;?></div>
              <div class="description">
                <?php echo $berita5->desk;?>
              </div>
            </div>
               <div class="ui blue button" onclick="window.location.href='agendaartikel.php?id=<?php echo $berita5->id;?>'">
                <i class="flaticon-outcoming icon"></i>
                Lihat
              </div>  
          </div>
        </div>

        <div class="column">
          <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
            <div class="image">
              <img src="img/<?php echo $berita6->foto;?>">
            </div>
            <div class="content">
              <div class="header"><?php echo $berita6->judul;?></div>
              <div class="description">
                <?php echo $berita6->desk;?>
              </div>
            </div>
               <div class="ui blue button" onclick="window.location.href='agendaartikel.php?id=<?php echo $berita6->id;?>'">
                <i class="flaticon-outcoming icon"></i>
                Lihat
              </div>  
          </div>
        </div>
      </div>
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
