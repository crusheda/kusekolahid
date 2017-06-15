<!DOCTYPE html>
<html>
<head>
  <title>Tambah Aset bangunan</title>
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
            nama_bangunan: {
              identifier  : 'tahun_ajaran',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            kode_bangunan: {
              identifier  : 'nbm',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            register_bangunan: {
              identifier  : 'nama_guru',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            kode_bangunan: {
              identifier  : 'bidang',
              rules: [                
                {
                  type   : 'empty'
                }
              ]
            },
            kostruksi_bangunan: {
              identifier  : 'nuptk',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            luas_lantai: {
              identifier  : 'nip',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            lokasi: {
              identifier  : 'tempat_lahir',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            tahun_pembangunan: {
              identifier  : 'tgl_lahir',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            luas_bangunan: {
              identifier  : 'telepon',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            biaya_pembangunan: {
              identifier  : 'email',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tahun_pembangunan: {
              identifier  : 'pangkat_goldar',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            luas_bangunan: {
              identifier  : 'tgl_pengangkatan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tahun_pembangunan: {
              identifier  : 'sertifikasi_guru',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            luas_bangunan: {
              identifier  : 'tmt_sertifikat',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tahun_pembangunan: {
              identifier  : 'jk',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            luas_bangunan: {
              identifier  : 'sts_pegawai',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tahun_pembangunan: {
              identifier  : 'organisasi',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            luas_bangunan: {
              identifier  : 'alamat',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tahun_pembangunan: {
              identifier  : 'rt_rw',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            luas_bangunan: {
              identifier  : 'kelurahan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tahun_pembangunan: {
              identifier  : 'kec',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            luas_bangunan: {
              identifier  : 'kab',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tahun_pembangunan: {
              identifier  : 'prov',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            luas_bangunan: {
              identifier  : 'pendidikan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tahun_pembangunan: {
              identifier  : 'jurusan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            luas_bangunan: {
              identifier  : 'univ',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tahun_pembangunan: {
              identifier  : 'thn_lulus',
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
        onclick="window.location.href='data_guru_adm.php'">
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
        Tambahkan Data
      </div>
    </h2>
    <form class="ui large form" action="prosesadd_data_guru.php" method="post" >
      <div class="ui stacked segment" style="opacity: 0.8">
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="npsn" maxlength="8" placeholder="NPSN (ex:20xxxxxxx)">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tahun_ajaran" placeholder="Tahun Ajaran">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="nbm" placeholder="NBM">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="nama_guru" placeholder="Nama Guru">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="bidang" placeholder="Bidang">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="nuptk" placeholder="NUPTK">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="nip" placeholder="NIP">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tgl_lahir" placeholder="Tanggal Lahir">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="telepon" placeholder="Telepon">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="email" placeholder="Email">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="pangkat_golruang" placeholder="Pangkat Golruang">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tgl_pengangkatan" placeholder="Tanggal Pengangkatan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="sertifikasi_guru" placeholder="Sertifikasi">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tmt_sertifikasi" placeholder="TMT Sertifikasi">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="jk" placeholder="Jenis Kelamin">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="sts_pegawai" placeholder="Setatus Pegawai">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="organisasi" placeholder="Organisasi">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="alamat" placeholder="Alamat">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="rt_rw" placeholder="Rt / Rw">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name=" kelurahan" placeholder="Kelurahan ">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="kec " placeholder="Kecamatan ">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="kab " placeholder="Kabupaten ">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="prov " placeholder="Provinsi">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="pendidikan" placeholder="Pendidikan ">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="jurusan" placeholder="Jurusan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="univ " placeholder="Universitas ">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="thn_lulus" placeholder="Tahun Lulus ">
          </div>
        </div>
        <div class="ui fluid large blue submit button" style="background-color: #697192">
          <a style="color: white">Tambah</a>
        </div>
          <br>
      </div>
    </form>
    <br>
  </div>
</div>
</body>
</html>