<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query="SELECT * from aset_tanah where npsn=".$kunci;
$sql = mysql_query($query, $koneksi);
$data = mysql_fetch_object($sql);

    
  ?>
  <!DOCTYPE html>
<html>
<head>
  <title>Edit Aset Tanah</title>
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
            nama: {
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
            no_persil: {
              identifier  : 'no_persil',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            kepemilikan: {
              identifier  : 'kepemilikan',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            atasnama_sertifikat: {
              identifier  : 'atasnama_sertifikat',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            status_tanah: {
              identifier  : 'status_tanah',
              rules: [                
                {
                  type   : 'empty'
                }
              ]
            },
            luas_tanah: {
              identifier  : 'luas_tanah',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            no_sertifikat: {
              identifier  : 'no_sertifikat',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
              tgl_sertifikat: {
              identifier  : 'tgl_sertifikat',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            thn_perolehan: {
              identifier  : 'thn_perolehan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            harga_perolehan: {
              identifier  : 'harga_perolehan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            letak: {
              identifier  : 'letak',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            peruntukan: {
              identifier  : 'peruntukan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            asal_usul: {
              identifier  : 'asal_usul',
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
        onclick="window.location.href='aset_tanah_adm.php'">
  <i class="flaticon-outcoming icon" style="font-size: 22px"></i>
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
        Edit Data Aset Tanah
      </div>
    </h2>
    <form class="ui large form" action="prosesedit_aset_tanah.php" method="post" >
      <div class="ui stacked segment" style="opacity: 0.8">
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="npsn" maxlength="8" placeholder="NPSN (ex:20xxxxxxx)" value="<?php echo $data->npsn;?>">

          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="no_persil" placeholder="No Persil" value="<?php echo $data->no_persil;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="kepemilikan" placeholder="Kepemilikan" value="<?php echo $data->kepemilikan;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="atasnama_sertifikat" placeholder="Atas Nama Sertifikat" value="<?php echo $data->atasnama_sertifikat;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="status_tanah" placeholder="Status Tanah" value="<?php echo $data->status_tanah;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="luas_tanah" placeholder="Luas Tanah" value="<?php echo $data->luas_tanah;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="no_sertifikat" placeholder="No Sertifikat" value="<?php echo $data->no_sertifikat;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tgl_sertifikat" placeholder="Tanggal Sertifikat" value="<?php echo $data->tgl_sertifikat;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="thn_perolehan" placeholder="Tahun Perolehan" value="<?php echo $data->thn_perolehan;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="harga_perolehan" placeholder="Harga Perolehan" value="<?php echo $data->harga_perolehan;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="asal_usul" placeholder="Asal Usul" value="<?php echo $data->asal_usul;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="letak" placeholder="Letak" value="<?php echo $data->letak;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="peruntukan" placeholder="Peruntukan" value="<?php echo $data->peruntukan;?>">
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