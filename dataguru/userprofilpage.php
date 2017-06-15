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
    $sqlguru=mysql_query("select * from data_guru where npsn='$kunci'");



    $data = mysql_fetch_object($sql);
    $data2 = mysql_fetch_object($sql2);
    $data3 = mysql_fetch_object($sql3);
    $data4 = mysql_fetch_object($wakasek);
    $data5 = mysql_fetch_object($sql5);
    $data6 = mysql_fetch_object($sql6);
    $data7 = mysql_fetch_object($sql7);
    $dataguru = mysql_fetch_object($sqlguru);
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
  <div class="ui horizontal divider"><a>PROFIL Guru</a></div>
  <div class="ui container">
    <div class="ui segment">

      <div class="ui two column stackable grid">

       <div class="four wide column">
          <div class="ui people shape">
            <div class="sides">
              <div class="side active">
                <div class="ui card">
                  <div class="image">
                    <img src="../img/profilimg.png">
                  </div>
                  <div class="content">
                    <div class="header"><a>NIP = <?php echo $dataguru->nip;?></a></div>
                    <div class="header">
                      <a><?php echo $dataguru->nama_guru;?></a>
                    </div>
                    <div class="description">
                      Bidang <?php echo $dataguru->bidang;?>
                      <span class="right floated">
                      Tahun <?php echo $dataguru->tahun_ajaran;?>
                    </span>
                    </div>
                  </div>
                  <div class="extra content">
                    <hr>
                    <span>
                      <i class="birthday icon"></i>
                      <p style="display: inline;">Tempat Lahir : <?php echo $dataguru->tempat_lahir;?></p>
                    </span>
                    <br>
                    <span>
                      <i class="birthday icon"></i>
                      <p style="display: inline;">Tanggal Lahir : <?php echo $dataguru->tgl_lahir;?></p>
                    </span>
                    <hr>
                    <span>
                      <i class="university icon"></i>
                      <p style="display: inline;"><?php echo $data->nama_sekolah;?></p>
                    </span>
                    <br>
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
    
        <div class="twelve wide column" style="height: 600px">
          <div class="ui container" >
            <div class="ui segment" style="height: 580px">

                <div class="column" >
                    <div class="ui two column stackable grid" style="height: 350px" >
                  <div class="column">
                    <div class="meta">
                      <a>Keterangan</a>
                      <hr>
                       <div class="ui segment" style="height: 265px"> 
                          
                          <p>NUPTK  : <?php echo $dataguru->nuptk;?></p>  
                          <p>Tanggal Pengangkatan   : <?php echo $dataguru->tgl_pengangkatan;?></p>  
                          <p>Status Pegawai   : <?php echo $dataguru->sts_pegawai;?></p>     
                          <p>Pangkat Gol Ruang  : <?php echo $dataguru->pangkat_golruang;?></p>
                          <p>Sertifikat Guru  : <?php echo $dataguru->sertifikasi_guru;?></p>
                          <p>TMT Sertifikat   : <?php echo $dataguru->tmt_sertifikasi;?></p>
                        </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="meta">
                      <a>Alamat</a>
                      <hr>
                      <div class="ui segment" style="height: 265px">
                          <p>Alamat  : <?php echo $dataguru->alamat;?></p>  
                          <p>RT/RW   : <?php echo $dataguru->rt_rw;?></p>     
                          <p>Kelurahan  : <?php echo $dataguru->kelurahan;?></p>
                          <p>Provinsi   : <?php echo $dataguru->prov;?></p>
                      </div>
                    </div>
                  </div>
                  
                </div>
                </div>

                <div class="column">
                  
                    <div class="column row">
                    <div class="column">
                      <div class="ui segment" style="height: 220px">            
                        <a>Pendidikan</a><br>
                        <hr>
                        <p>Pendidikan : <?php echo $dataguru->pendidikan;?></p>
                        <p>Universitas : <?php echo $dataguru->univ;?></p>
                        <p>Jurusan : <?php echo $dataguru->jurusan;?></p>
                        <p>Tahun Lulus : <?php echo $dataguru->thn_lulus;?></p>
                      </div>
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
      <center><img src="../img/twh.png" style="width: 40px;height: 40px"></center>
    </div>
      <center>
        <h4 class="ui inverted header">All Right Reserved<br><sub>Copyright 2017</sub></h4>
      </center>
  </div>
</body>
</html>
