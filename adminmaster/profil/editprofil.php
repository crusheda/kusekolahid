<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query="SELECT * from profil where npsn=".$kunci;
$sql = mysql_query($query, $koneksi);
$data = mysql_fetch_object($sql);

    
  ?>
  <!DOCTYPE html>
<html>
<head>
  <title>Edit Data Profil Sekolah</title>
  <link rel="stylesheet" type="text/css" href="../../dist/semantic.min.css">
  <link href='../../img/twh.ico' rel='shortcut icon'>
  <link rel="icon" href="../../img/twh.ico" type="image/x-icon">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="../../dist/semantic.min.js"></script>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../../dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="../../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/menu.css">
  <link rel="stylesheet" type="text/css" href="../../iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/icon.css">

  <script src="../../dist/components/form.js"></script>
  <script src="../../dist/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #0064AB;
      background-size: 100% auto;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.dropdown').dropdown();
      $('.ui.form')
        .form({
          fields: {
            npsn: {
              identifier  : 'npsn',
              rules: [
                {
                  type   : 'empty'
                },
                {
                  type   : 'number'
                }
              ]
            },
            jenjang: {
              identifier  : 'jenjang',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            nama_sekolah: {
              identifier  : 'nama_sekolah',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            sk_pendirian: {
              identifier  : 'sk_pendirian',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            tgl_pendirian: {
              identifier  : 'tgl_pendirian',
              rules: [                
                {
                  type   : 'empty'
                }
              ]
            },
            alamat: {
              identifier  : 'alamat',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            kel: {
              identifier  : 'kel',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            kec: {
              identifier  : 'kec',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            kab: {
              identifier  : 'kab',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            telepon: {
              identifier  : 'telepon',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            email: {
              identifier  : 'email',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            web: {
              identifier  : 'web',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            akreditasi: {
              identifier  : 'akreditasi',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            sk_akreditasi: {
              identifier  : 'sk_akreditasi',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            kurikulum: {
              identifier  : 'kurikulum',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            visi: {
              identifier  : 'visi',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            misi: {
              identifier  : 'misi',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tujuan: {
              identifier  : 'tujuan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            moto: {
              identifier  : 'moto',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            koordinat_long: {
              identifier  : 'koordinat_long',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            koordinat_lat: {
              identifier  : 'koordinat_lat',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            listrik: {
              identifier  : 'listrik',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            akses_internet: {
              identifier  : 'akses_internet',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            }        
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>
<button class="circular floated fixed ui icon button" 
        style="margin-top: 20px;margin-left: 20px;width: 45px;height: 45px;opacity: 0.8;background-color: white;color: blue"
        onclick="window.location.href='profiladm.php'">
  <i class="flaticon-home icon" style="font-size: 22px"></i>
</button>
<div class="container">
</div>
<div class="ui aligned center aligned grid" style="margin-top: -100px">
  <div class="column">
    <h2 class="ui teal image header">
    <br><br>
    <br><br>
      <img src="../../img/dapodik.png" class="image">
      <div class="content" style="color: white;opacity: 0.8">
        Edit Data Profil Sekolah
      </div>
    </h2>
    <form class="ui large form" action="proseseditprofil.php" method="post" >
      <div class="ui stacked segment" style="opacity: 0.8">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="npsn" maxlength="8" placeholder="NPSN (ex:20xxxxxxx)" value="<?php echo $data->npsn;?>">

          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="jenjang" placeholder="Jenjang" value="<?php echo $data->jenjang;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="nama_sekolah" placeholder="Nama Sekolah" value="<?php echo $data->nama_sekolah;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="sk_pendirian" placeholder="SK Pendirian" value="<?php echo $data->sk_pendirian;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tgl_pendirian" placeholder="Tanggal Pendirian" value="<?php echo $data->tgl_pendirian;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="alamat" placeholder="Alamat" value="<?php echo $data->alamat;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="kel" placeholder="Kelurahan" value="<?php echo $data->kel;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="kec" placeholder="Kecamatan" value="<?php echo $data->kec;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="kab" placeholder="Kabupaten" value="<?php echo $data->kab;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="telepon" placeholder="Telepon" value="<?php echo $data->telepon;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="email" placeholder="Email" value="<?php echo $data->email;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="web" placeholder="Website" value="<?php echo $data->web;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="akreditasi" placeholder="Akreditasi" value="<?php echo $data->akreditasi;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="sk_akreditasi" placeholder="SK Akreditasi" value="<?php echo $data->sk_akreditasi;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="kurikulum" placeholder="Kurikulum" value="<?php echo $data->kurikulum;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="visi" placeholder="Visi" value="<?php echo $data->visi;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="misi" placeholder="Misi" value="<?php echo $data->misi;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tujuan" placeholder="Tujuan" value="<?php echo $data->tujuan;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="moto" placeholder="Moto" value="<?php echo $data->moto;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="koordinat_long" placeholder="Koordinat Long" value="<?php echo $data->koordinat_long;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="koordinat_lat" placeholder="Koordinat Latitude" value="<?php echo $data->koordinat_lat;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="listrik" placeholder="Listrik" value="<?php echo $data->listrik;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="akses_internet" placeholder="Akses Internet" value="<?php echo $data->akses_internet;?>">
          </div>
        </div>
        <div class="ui fluid large blue submit button" style="background-color: #697192">
          <a style="color: white">Edit</a>
        </div>
          <br>
      </div>
    </form>
    <br>
  </div>
</div>
</body>
</html>