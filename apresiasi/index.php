<?php
include("auth.php");
include("../koneksi.php");
date_default_timezone_set('Asia/jakarta');
include ("komentar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page Aspirasi siswa</title>
  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/mediaelementplayer.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/animate.min.css"/>
  <link href="../asset/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- end: Css -->

  <link rel="shortcut icon" href="../asset/img/logomi.png">
  <!-- HTML5 shim and Respond.../asset IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.../asset"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.../asset"></script>
      <![endif]-->
      <style type="text/css">
        .gambar {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
            /*width: 100%;*/
            height: auto;
        }
      </style>
</head>

<body id="mimin" class="dashboard topnav">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
                <a href="index.html" class="navbar-brand"> 
                 <b>SMKN 1 Cileungsi</b>
                </a>
              <ul class="button">
              	<a class="btn btn-primary" style="margin-top: 10px;" href="../logout.php"><i class="fa fa-sign-out"></i> Keluar</a>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->
      <!-- konten -->
        <div id="content" class="article-v1">
            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">Aspirasi Siswa</h3>
                      <p class="animated fadeInDown">
                        Home <span class="fa-angle-right fa"></span> Aspirasi Siswa
                      </p>
                  </div>
                </div>
            </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="pull-right article-v1-time">
                  <em> February 27 2018 - 07:45 Am</em></div>
                  <div class="panel-body">
                    <div class="col-md-12 text-center article-v1-title"><h2>Aspirasi Siswa untuk Organisasi dan Sekolah SMKN 1 Cileungsi</h2></div>
                    <div class="col-md-12  article-v1-body">
                      <img  src="../img/logo_all.png" class="gambar">
                      <br>
                      <label style="font-size: 16px;">Punya Kritik, Saran dan aspirasi untuk memajukan sekolah? silahkan komen di bawah untuk membantu sekolah kita ini maju <br>
                      Peraturan memberi Kritik, Saran & aspirasi :
                        <li>Dilarang Memojokan Suatu RAS/Antar golongan</li>
                        <li>Dilarang Berkata kasar</li>
                      </label>
                    </div>
               <div class="col-md-12 article-v1-footer">
                   <div class="col-md-12 article-v1-comment">
                    <h3><b>Komentar:</b></h3>
                    <?php
                    echo "<form method='post' action='".subcomment($koneksi)."'>
                      <input type='hidden' name='user' value='".$_SESSION["username"]."'>
                      <input type='hidden' name='date' value='".date('d-M-Y H:i')."'>
                      <textarea name='komentar' placeholder='Tambahkan Komentar'></textarea required><br>
                      <button type='submit' style='margin-bottom: 50px;' class='btn btn-primary' name='submit'>Comment</button>
                    </form>";

                    showcomment($koneksi);
                    ?>
               </div>
             </div>
            </div>
        </div>
          <!-- End konten -->

<!-- start: Javascript -->
<script src="asset/../asset/jquery.min.../asset"></script>
<script src="asset/../asset/jquery.ui.min.../asset"></script>
<script src="asset/../asset/bootstrap.min.../asset"></script>



<!-- plugins -->
<script src="asset/../asset/plugins/holder.min.../asset"></script>
<script src="asset/../asset/plugins/moment.min.../asset"></script>
<script src="asset/../asset/plugins/jquery.nicescroll.../asset"></script>


<!-- custom -->
<script src="asset/../asset/main.../asset"></script>
<script type="text/javascript">
  $(document).ready(function(){

  });
</script>
<!-- end: Javascript -->