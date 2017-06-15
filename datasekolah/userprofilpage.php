<?php  
    include "../koneksi.php";
    $kunci=$_GET['npsn'];
    $sql=mysql_query("select * from profil where npsn='$kunci'");
    $sql2=mysql_query("select npsn,jumlah_putra,jumlah_putri,jumlah_siswa from siswa where npsn='$kunci'");
    $sql3=mysql_query("select npsn,tahun_ajaran,kepala_sekolah,nbm,tmt_jabatan from kepsek where npsn='$kunci'");
    $wakasek=mysql_query("select npsn,wakil_kepala,nbm,waka_bidang,tmt_jabatan from wakasek where npsn='$kunci'");
    $sql5=mysql_query("select npsn,no_persil,kepemilikan,atasnama_sertifikat,luas_tanah,tgl_sertifikat from aset_tanah where npsn='$kunci'");
    $sql6=mysql_query("select nama_bangunan,lokasi,tahun_pembangunan,kondisi_bangunan,luas_bangunan from aset_bangunan where npsn='$kunci'");
    $sql7=mysql_query("select nama_prasarana,jumlah,kondisi_baik,kondisi_rusakringan,kondisi_rusaksedang,kondisi_rusakberat,tahun_pengadaan from sarpras where npsn='$kunci'");

    $data = mysql_fetch_object($sql);
    $data2 = mysql_fetch_object($sql2);
    $data3 = mysql_fetch_object($sql3);
    $data4 = mysql_fetch_object($wakasek);
    $data5 = mysql_fetch_object($sql5);
    $data6 = mysql_fetch_object($sql6);
    $data7 = mysql_fetch_object($sql7);
?><!DOCTYPE html>
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
          <a class="item">
            <i class="flaticon-mail" style="color: white"></i> Hubungi Kami
          </a>
          <div class="right menu">
            <a class="ui item" href="../login.html" style="color: white" title="Login Ke Akun Anda">
              <i class="white flaticon-outcoming icon" style="color: white"></i><b>Login</b>
            </a>
          </div>
        </div>
                     
        <div class="ui hidden transition information">
          <h1 class="ui centered lead">Lihat Informasi Data Sekolah</h1>
          <br>
        </div>
      </div>  
    </div>
  </div>
  <br>
  <!-- Isi Body -->
  <div class="ui horizontal divider"><a>PROFIL SEKOLAH</a></div>
  <div class="ui container">
    <div class="ui segment">
      <div class="ui two column stackable grid">
        <div class="eleven wide column">
          <div class="ui container">
            <div class="ui segment" style="height: 520px">
              <div class="ui four column stackable grid">
                <div class="column">
                  <div class="meta">
                    <a>VISI</a>
                    <hr>
                    <p><?php echo $data->visi;?></p>
                  </div>
                </div>
                <div class="column">
                  <div class="meta">
                    <a>MISI</a>
                    <hr>
                    <p><?php echo $data->misi;?></p>
                  </div>
                </div>
                <div class="column">
                  <div class="meta" style="font-family: Roboto">
                    <a>TUJUAN</a>
                    <hr>
                    <p><?php echo $data->tujuan;?></p>
                  </div>
                </div>
                <div class="column">
                  <div class="meta">
                    <a>MOTO</a>
                    <hr>
                    <p><?php echo $data->moto;?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>        
        <div class="four wide column">
          <div class="ui people shape">
            <div class="sides">
              <div class="side active">
                <div class="ui card">
                  <div class="image">
                    <img src="../img/profilimg.png">
                  </div>
                  <div class="content">
                    <div class="header"><a>NPSN = <?php echo $data->npsn;?></a></div>
                    <div class="meta">
                      <a><?php echo $data->nama_sekolah;?></a>
                    </div>
                    <div class="description">
                      <?php echo $data->alamat;?>
                    </div>
                  </div>
                  <div class="extra content">
                    <span class="right floated">
                      Sejak <?php echo $data->tgl_pendirian;?>
                    </span>
                    <span>
                      <i class="user icon"></i>
                      <p style="display: inline;"><?php echo $data2->jumlah_siswa;?> Siswa</p>
                    </span>
                    <hr>
                    <span>
                      <i class="man icon"></i>
                      <p style="display: inline;">Jumlah Putra : <?php echo $data2->jumlah_putra;?> Siswa</p>
                    </span>
                    <br>
                    <span>
                      <i class="woman icon"></i>
                      <p style="display: inline;">Jumlah Putri : <?php echo $data2->jumlah_putri;?> Siswa</p>
                    </span>
                    <hr>
                    <span>
                      <i class="university icon"></i>
                      <p style="display: inline;">Akreditasi <?php echo $data->akreditasi;?></p>
                    </span>
                    <br>
                    <span>
                      <i class="book icon"></i>
                      <p style="display: inline;">Kurikulum <?php echo $data->kurikulum;?></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="ui segment">
            <a>Sarana Dan Prasarana</a>
            <hr>
            <sub>Tahun Pengadaan : <?php echo $data7->tahun_pengadaan;?></sub>
            <p>Nama Sarpras : <?php echo $data7->nama_prasarana;?></p>         
            <p>Kondisi Baik : <?php echo $data7->kondisi_baik;?></p>
            <p>Kondisi Rusak Ringan : <?php echo $data7->kondisi_rusakringan;?></p>
            <p>Kondisi Rusak Sedang : <?php echo $data7->kondisi_rusaksedang;?></p>
            <p>Kondisi Rusak Berat : <?php echo $data7->kondisi_rusakberat;?></p>
            <hr>
            <p>Jumlah Total : <?php echo $data7->jumlah;?></p>
          </div>
        </div>
        <div class="column">
          <div class="ui segment" style="height: 265px">
            <a>Kepsek Dan Wakil Kepsek</a>
            <p>Tahun Ajaran : <?php echo $data3->tahun_ajaran;?></p>
            <hr>
            <sub>Tamat Jabatan : <?php echo $data3->tmt_jabatan;?></sub>
            <p>Nama Kepsek : <?php echo $data3->kepala_sekolah;?></p>
            <p>NBM : <?php echo $data3->nbm;?></p>

            <sub>Tamat Jabatan : <?php echo $data4->tmt_jabatan;?></sub>            
            <p>Nama Wakasek : <?php echo $data4->wakil_kepala;?> (Bagian : <?php echo $data4->waka_bidang;?>)</p>
            <p>NBM : <?php echo $data3->nbm;?></p>
          </div>
        </div>
        <div class="three column row">
          <div class="column">
            <div class="ui segment" style="height: 220px">            
              <a>Aset Bangunan</a><br>
              <sub>Bangunan Sejak : <?php echo $data6->tahun_pembangunan;?></sub>
              <hr>
              <p>Nama Bangunan : <?php echo $data6->nama_bangunan;?></p>
              <p>Lokasi : <?php echo $data6->lokasi;?></p>
              <p>Luas Bangunan : <?php echo $data6->luas_bangunan;?></p>
              <p>Kondisi : <?php echo $data6->kondisi_bangunan;?></p>
            </div>
          </div>
          <div class="column">
            <div class="ui segment" style="height: 220px">
            <a>Aset Tanah</a>
            <p>No Persil : <?php echo $data5->no_persil;?></p>
              <hr>
              <p>Atas Nama Sertifikat : <?php echo $data5->atasnama_sertifikat;?></p>
              <p>Tgl Sertifikat : <?php echo $data5->tgl_sertifikat;?></p>
              <p>Kepemilikan : <?php echo $data5->kepemilikan;?></p>
              <p>Luas Tanah : <?php echo $data5->luas_tanah;?></p>
            </div>
          </div>
          <div class="column">
            <div class="ui segment" style="height: 220px">
              <a>Kontak</a>
              <hr>
              <p>Web : <?php echo $data->web;?></p>
              <p>Telepon : <?php echo $data->telepon;?></p>
              <p>E-Mail : <?php echo $data->email;?></p>
            </div>
          </div>
        </div>

      </div>      
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
